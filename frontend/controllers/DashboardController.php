<?php


namespace frontend\controllers;


use common\models\Company;
use common\models\LaborActivity;
use common\models\Language;
use common\models\Region;
use common\models\User;
use common\models\VacancyOrders;
use common\models\Worker;
use common\models\City;
use common\models\WorkerLanguage;
use frontend\models\MyHistory;
use frontend\models\SignupForm;
use kartik\mpdf\Pdf;
use Yii;
use frontend\models\Model;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\UploadedFile;

class DashboardController extends Controller
{
    public $layout = 'cabinet';

    public function actionCv(){

        $model = $this->findWorker(Yii::$app->user->identity->getId());
        $user = User::findOne($model->userId);

        if ($user->regionId && $user->cityId){
            $model->regionId = $user->regionId;
            $model->cityId = $user->cityId;
        }

        return $this->render('cv', [
            'model' => $model,
        ]);
    }

    public function actionCvDownload($id = null) {

        $identity = Yii::$app->user->identity;
        $model = Worker::findOne($id);
        if (!$model or $model->userId == $identity->id)
        {
            $model = $this->findWorker($identity->id);
            $user = User::findOne($model->userId);

            if ($user->regionId && $user->cityId){
                $model->regionId = $user->regionId;
                $model->cityId = $user->cityId;
            }
        }

        // get your HTML raw content without any layouts or scripts
        $content = $this->renderPartial('cv', ['model' => $model]);

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_UTF8,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_DOWNLOAD,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px} .oq{color: #fff}',
            // set mPDF properties on the fly
            'options' => ['title' => 'Krajee Report Title'],
            // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=>['CV EXPORT'],
                'SetFooter'=>['{PAGENO}'],
            ],
            'filename' => 'cv_export_qilish.pdf',
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();
    }


    public function actionWorker(){

        if (Yii::$app->user->identity && $model = $this->findWorker(Yii::$app->user->identity->getId())){

            $user = User::findOne($model->userId);

            if ($user->regionId && $user->cityId){
                $model->regionId = $user->regionId;
                $model->cityId = $user->cityId;
            }
        }else{
            return $this->redirect('/dashboard/edit-worker');
        }


        return $this->render('worker', [
            'model' => $model,
        ]);
    }

    public function actionEditWorker(){

        if (!$this->findWorker(Yii::$app->user->identity->getId())){
            return $this->redirect('worker-create');
        }

        $model = $this->findWorker(Yii::$app->user->identity->getId());
        $modelsLanguage = $model->languages;
        $modelsLaborActivity = $model->laborActivity;

        if (Yii::$app->request->post()){
            $model = Worker::findOne(['userId' => Yii::$app->user->identity->getId()]);
            $model->scenario = Worker::SCENARIO_CREATE;
            $model->load(Yii::$app->request->post());

            $oldlangIDs = ArrayHelper::map($modelsLanguage, 'id', 'id');
            $modelsLanguage = Model::createMultiple(WorkerLanguage::classname(), $modelsLanguage);
            Model::loadMultiple($modelsLanguage, Yii::$app->request->post());
            $deletedlangIDs = array_diff($oldlangIDs, array_filter(ArrayHelper::map($modelsLanguage, 'id', 'id')));

            $oldlaborIDs = ArrayHelper::map($modelsLaborActivity, 'id', 'id');
            $modelsLaborActivity = Model::createMultiple(LaborActivity::classname(), $modelsLaborActivity);
            Model::loadMultiple($modelsLaborActivity, Yii::$app->request->post());
            $deletedlaborIDs = array_diff($oldlaborIDs, array_filter(ArrayHelper::map($modelsLaborActivity, 'id', 'id')));

            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsLaborActivity),
                    ActiveForm::validateMultiple($modelsLanguage),
                    ActiveForm::validate($model)
                );
            }

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsLanguage) && Model::validateMultiple($modelsLaborActivity) && $valid;


            if ($valid) {
                $upload_flag = true;
                if ($model->photo_user = UploadedFile::getInstance($model, 'photo_user')) {
                    if (!$model->upload()){
                        $upload_flag = false;
                    }
                }
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false) && $upload_flag) {

                        $user = User::findOne(Yii::$app->user->identity->getId());
                        $user->regionId = $model->regionId;
                        $user->cityId = $model->cityId;
                        $user->save();

                        if (! empty($deletedlangIDs)) {
                            WorkerLanguage::deleteAll(['id' => $deletedlangIDs]);
                        }
                        foreach ($modelsLanguage as $modelLanguage) {
                            $modelLanguage->worker_id = $model->id;
                            if (! ($flag = $modelLanguage->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }

                        if (! empty($deletedlaborIDs)) {
                            LaborActivity::deleteAll(['id' => $deletedlaborIDs]);
                        }
                        foreach ($modelsLaborActivity as $modelLaborActivity) {
                            $modelLaborActivity->worker_id = $model->id;
                            if (! ($flag = $modelLaborActivity->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect('/dashboard/worker');
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }

        }

        $model = Worker::findOne(['userId' => Yii::$app->user->identity->getId()]);
        $user = User::findOne($model->userId);
        $model->regionId = $user->regionId;
        $model->cityId = $user->cityId;

        return $this->render('edit-worker', [
            'model' => $model,
            'modelsLaborActivity' => (empty($modelsLaborActivity)) ? [new LaborActivity] : $modelsLaborActivity,
            'modelsLanguage' => (empty($modelsLanguage)) ? [new Language] : $modelsLanguage,
            ]
        );
    }

    public function actionWorkerCreate(){

        if ($this->findWorker(Yii::$app->user->identity->getId())){
            return $this->redirect('edit-worker');
        }

        $model = new Worker();
        $modelsLanguage = [new WorkerLanguage()];
        $modelsLaborActivity = [new LaborActivity()];

        $model->scenario = Worker::SCENARIO_CREATE;
        $model->userId = Yii::$app->user->identity->getId();

        if ($model->load(Yii::$app->request->post()))
        {

            $modelsLanguage = Model::createMultiple(WorkerLanguage::classname());
            Model::loadMultiple($modelsLanguage, Yii::$app->request->post());

            $modelsLaborActivity = Model::createMultiple(LaborActivity::classname());
            Model::loadMultiple($modelsLaborActivity, Yii::$app->request->post());

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsLanguage) && Model::validateMultiple($modelsLaborActivity) && $valid;

            if ($valid) {
                $upload_flag = true;
                if ($model->photo_user = UploadedFile::getInstance($model, 'photo_user')) {
                    if (!$model->upload()){
                        $upload_flag = false;
                    }
                }

                $transaction = \Yii::$app->db->beginTransaction();

                try {
                    if ($flag = $model->save(false) && $upload_flag) {

                        $user = User::findOne(Yii::$app->user->identity->getId());
                        $user->regionId = $model->regionId;
                        $user->cityId = $model->cityId;
                        $user->save(false);

                        foreach ($modelsLanguage as $modelLanguage) {
                            $modelLanguage->worker_id = $model->id;
                            if (! ($flag = $modelLanguage->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }

                        foreach ($modelsLaborActivity as $modelLaborActivity) {
                            $modelLaborActivity->worker_id = $model->id;
                            if (! ($flag = $modelLaborActivity->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }

                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect('/dashboard/worker');
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }

        }

        return $this->render('worker-create', [
            'model' => $model,
            'modelsLanguage' => (empty($modelsLanguage)) ? [new WorkerLanguage()] : $modelsLanguage,
            'modelsLaborActivity' => (empty($modelsLaborActivity)) ? [new LaborActivity()] : $modelsLaborActivity
        ]);
    }

    public function actionIndex(){

        $id = \Yii::$app->user->getId();
        $model = $this->findModel($id);
        $orders_count = VacancyOrders::find()->where(['company_id' => $model->id, 'company_view' => 0])->count();

        return $this->render('index', [
            'model' => $model,
            'orders_count' => $orders_count,
        ]);
    }

    public function actionEdit(){

        $id = \Yii::$app->user->getId();
        $company = $this->findModel($id);
        $company->scenario = Company::SCENARIO_CABINET;

        if ($company->load(\Yii::$app->request->post()))
        {
            $upload_flag = true;
            if ($company->imgLogo = UploadedFile::getInstance($company, 'imgLogo')) {
                if (!$company->upload()){
                    $upload_flag = false;
                }
            }
            if ($company->save() && $upload_flag){
                Yii::$app->session->setFlash('success', "O'zgarish saqlandi");
            }else{
                Yii::$app->session->setFlash('error', 'Nimadadir xato bo`ldi!');
            }
        }

        return $this->render('edit', ['company' => $company]);

    }

    public function actionMyOrders()
    {
        $worker_id = Worker::findOne(['userId' => Yii::$app->user->identity->getId()])->id;
        $my_orders = VacancyOrders::find()->where(['worker_id' => $worker_id])->all();

        return $this->render('myorders',[
           'my_orders' => $my_orders,
        ]);
    }

    public function actionOrders()
    {
        $orders = null;
        if ($identity = Yii::$app->user->identity)
        {
            $company = Company::findOne(['userId' => $identity->id]);
            $company_id = $company ? $company->id : null;
            $orders = VacancyOrders::find()->where(['company_id' => $company_id])->all();
        }

        return $this->render('orders',[
            'orders' => $orders,
        ]);
    }

    protected function findModel($id)
    {
        if ($model = Company::findOne(['userId' => $id])) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findWorker($id)
    {
        if ($model = Worker::findOne(['userId' => $id])) {
            return $model;
        }

        return false;
    }

    public function actionCyrlLat(){
        $models = Region::find()->all();
        foreach ($models as $model){
            $model->name_en = cyrllat($model->name_oz);
            $model->name_uz = cyrllat($model->name_oz);
            $model->name_ru = $model->name_oz;
            if ($model->save()){
                echo $model->name_en . 'Yangilandi. <br>';
            }else{
                echo $model->name_en . " da o'zgairsh bo'lmadi. <br>";
            }
        }
    }
}