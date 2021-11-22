<?php


namespace frontend\models;
use yii\base\Model;
use \yii\db\Query;


class Report extends Model
{
    public static function MapJoin($region = null){

        $company = (new Query())
            ->select('count(c.id) as company')
            ->from('company c')
            ->where("u.region_id = $region")
            ->innerJoin('user u', 'c.user_id = u.id')
            ->all();

        $vacancy = (new Query())
            ->select('count(*) as vacancy')
            ->from('vacancy')
            ->where("region_id = $region")
            ->all();

        $rows = array($company, $vacancy);

        return $rows;

    }
}