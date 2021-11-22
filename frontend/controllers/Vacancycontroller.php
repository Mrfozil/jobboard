<?php

namespace frontend\controllers;

use common\models\Company;
use common\models\Import;
use common\models\JobType;
use common\models\LoginForm;
use common\models\Profession;
use common\models\Region;
use common\models\User;
use common\models\Vacancy;
use common\models\VacancyOrders;
use common\models\Worker;
use frontend\models\City;
use frontend\models\Report;
use frontend\models\SignupForm;
use frontend\models\VacancySearch;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * VacancyController implements the CRUD actions for Vacancy model.
 */
class VacancyController extends Controller
{
    public $layout = 'cabinet';
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Vacancy models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VacancySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vacancy model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Vacancy model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Vacancy();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->user_id = Yii::$app->user->identity->getId();
                $company = Company::findOne(['userId' => $model->user_id]);
                $model->company_id = $company ? $company->id : null;
                $model->deadline = date('Y-m-d', time() + 30 * 24 * 3600);

                $upload_flag = true;
                if ($model->imageFile = UploadedFile::getInstance($model, 'imageFile')) {
                    if (!$model->upload()){
                        $upload_flag = false;
                    }
                }
                if ($model->save() && $upload_flag){
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Vacancy model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionList()
    {

        $this->layout = 'main';

        $searchModel = new VacancySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $query = Vacancy::find();
        $count = $dataProvider->count;

        $pagination = new Pagination([
            'totalCount' => $count,
            'pageSize' => 50
        ]);

        $model = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('list', [
            'model' => $model,
            'pagination' => $pagination,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSingle($id, $add = null)
    {
        $this->layout = 'main';
        $model = $this->findModel($id);


        if ($identity = Yii::$app->user->identity){

            $company = Company::findOne(['userId' => $identity->id]);
            $worker = Worker::findOne(['userId' => $identity->id]);
            $worker_id = $worker ? $worker->id : null;

            if ($worker_id){
                $order = VacancyOrders::findOne(['vacancy_id' => $id, 'worker_id' => $worker_id]);
            }

            if ($add){
                $vacancy_order = new VacancyOrders();
                $vacancy_order->company_id = $model->company_id;
                $vacancy_order->vacancy_id = $id;
                $vacancy_order->worker_id = $worker_id;

                $vacancy_order->save();

                return $this->redirect('/vacancy/single?id=' . $id);
            }
        }

        $query = Vacancy::find();

        $count = $query->count();

        $pagination = new Pagination([
            'totalCount' => $count,
            'pageSize' => 2
        ]);

        $vacancyes = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $order = isset($order) ? true : false;

        return $this->render('single', [
            'model' => $model,
            'vacancyes' => $vacancyes,
            'pagination' => $pagination,
            'count' => $count,
            'order' => $order,
        ]);
    }

    /**
     * Deletes an existing Vacancy model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Vacancy model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Vacancy the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vacancy::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionImportExcel()
    {

                $inputFile = 'import/vacancy.xlsx';
                try{
                    $inputFileType = \PHPExcel_IOFactory::identify($inputFile);
                    $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFile);
                } catch (Exception $e) {
                    die('Error');
                }

                $sheet = $objPHPExcel->getSheet(0);
                $highestRow = $sheet->getHighestRow();
                $highestColumn = $sheet->getHighestColumn();


                for($row=1; $row <= $highestRow; $row++)
                {
                    $rowData = $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL,TRUE,FALSE);

                    if($row==1)
                    {
                        continue;
                    }

                    $region_id = ($region = Region::findOne(['name_uz' => $rowData[0][7]])) ? $region->id : 1;
                    $city_id = ($city = City::findOne(['name_uz' => $rowData[0][8]])) ? $city->id : 1;

                    $model = new Vacancy();
                    $user = User::findOne(['username' => strtolower($rowData[0][0])]);

                    if ($company = Company::findOne(['name' => $rowData[0][0]])){
                        $model->company_id = $company->id;
                    }else{

                        // Create user
                        if (!$user){
                            $user = new SignupForm();
                            $user->username = strtolower($rowData[0][0]);
                            $user->email = strtolower($rowData[0][0]) . '@sardor.smartdesign.uz';
                            $user->password = '12341234';
                            $user->status = 10;
                            $user->role = 'company';
                            $user = $user->signup();
                        }

                        //Create company
                        $company = new Company();
                        $company->scenario = 'signup';
                        $company->userId = $user->id;
                        $company->name = $rowData[0][0];
                        $company->director_name = 'Direktor';
                        $company->regionId = $region_id;
                        $company->cityId = $city_id;
                        $company->address = $rowData[0][14];
                        $company->phone = '1234567';
                        $company->logo = 'Yuq';
                        $company->date = date('Y-m-d', time());

                        if (!$company->save()){
                            vd($company->errors);
                        }

                        $model->company_id = $company->id;

                    }


                    $model->profession_id = ($profession = Profession::findOne(['name_uz' => $rowData[0][1]])) ? $profession->id : 50;
                    $model->user_id = $user->id;
                    $model->description_uz = $rowData[0][2];
                    $model->description_ru = $rowData[0][3];
                    $model->description_en = $rowData[0][4];
                    $model->description_oz = $rowData[0][5];
                    $model->job_type_id = ($job = JobType::findOne(['name_uz' => $rowData[0][6]])) ? $job->id : 1;
                    $model->region_id = $region_id;
                    $model->city_id = $city_id;
                    $model->count_vacancy = $rowData[0][9];
                    $model->salary = $rowData[0][10];
                    $model->gender = $this->CheckGender($rowData[0][11]);
                    $model->experience = $rowData[0][12];
                    $model->telegram = $rowData[0][13];
                    $model->address = $rowData[0][14];

                    if (!$model->save()){
                        vd($model->errors);
                    }

                }
                die('okay');

    }

    public function actionReport(){
        $result = Report::MapJoin('3');

        vd($result);
    }

    public function CheckGender($data){
        $result = 0;
        switch ($data){
            case 'Erkak': $result = 1; break;
            case 'Ayol': $result = 2; break;
        }
        return $result;
    }
}