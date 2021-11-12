<?php

namespace frontend\controllers;

use frontend\models\Profile;
use frontend\models\ProfileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProfileController implements the CRUD actions for Profile model.
 */
class ProfileController extends Controller
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


    /**
     * Displays a single Profile model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView()
    {
        $id = \Yii::$app->user->getId();
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionUpdate()
    {
        $id = \Yii::$app->user->getId();
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {

            if (UploadedFile::getInstance($model, 'imageFile'))
            {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                $model->image = 'avatars/' . $model->imageFile->baseName . '.' . $model->imageFile->extension;

                if ($model->upload() && $model->save()) {
                    // file is uploaded successfully
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }else
            {
                if ($model->save()) {
                    // file is uploaded successfully
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    /**
     * Finds the Profile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Profile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Profile::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
