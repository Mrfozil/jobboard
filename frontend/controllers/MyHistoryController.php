<?php

namespace frontend\controllers;

use frontend\models\MyHistory;
use frontend\models\MyHistorySearch;
use kartik\mpdf\Pdf;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * MyHistoryController implements the CRUD actions for MyHistory model.
 */
class MyHistoryController extends Controller
{
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

    public function actionList()
    {
        $data = MyHistory::find()->all();
        return $this->render('list', ['data' => $data]);
    }

    public function actionExport()
    {
        $spreadsheet = new Spreadsheet();
        $model = \frontend\models\MyHistory::find()->asArray()->all();
        $spreadsheet->getActiveSheet()
            ->fromArray(
                $model
            );

        $path = \Yii::getAlias('@frontend'). "/web/uploads/file_name.xlsx";
        $writer = new Xlsx($spreadsheet);
        $writer->save($path);
        \Yii::$app->response->sendFile($path);
    }

    public function actionShow($id)
    {
        $data = MyHistory::findOne(['id' => $id]);
        return $this->render('show', ['data' => $data]);
    }

    public function actionReport($id = 3) {
        $data = MyHistory::findOne(['id' => $id]);
        // get your HTML raw content without any layouts or scripts
        $content = $this->renderPartial('show', ['data' => $data]);

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}',
            // set mPDF properties on the fly
            'options' => ['title' => 'Krajee Report Title'],
            // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=>['GITA PHP KURSI'],
                'SetFooter'=>['{PAGENO}'],
            ],
            'filename' => 'yii2_da_pdfga_export_qilish.pdf',
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();
    }

    protected function findModel($id)
    {
        if (($model = MyHistory::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
