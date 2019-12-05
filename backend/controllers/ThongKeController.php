<?php


namespace backend\controllers;

use Yii;
use yii\web\Controller;

class ThongKeController extends Controller
{
    public function actionIndex()
    {
        $model = Yii::$app->db->createCommand("SELECT IFNULL(idbaiviet, UUID()) AS unq_idbaiviet, title ,posttime,viewcount, COUNT(`idbaiviet`) AS count_comment
                FROM binhluan
                RIGHT JOIN baiviet ON baiviet.`id` = binhluan.`idbaiviet`
                GROUP BY `unq_idbaiviet`")->queryAll();
        return $this->render('index', [
            'listThongKe' => $model
        ]);
    }
}