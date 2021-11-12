<?php


namespace frontend\controllers;


use common\models\City;
use frontend\models\Region;
use yii\web\Controller;

class AjaxController extends Controller
{
    public function actionCities($id)
    {
        $cities = City::selectList($id);
        $data = '';

        foreach ($cities as $cityId => $name)
        {
            $data .= "<option value='{$cityId}'>{$name}</option>";
        }
        return $data;
    }
}