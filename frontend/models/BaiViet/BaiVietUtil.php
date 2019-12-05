<?php


namespace frontend\models\BaiViet;


use Yii;

class BaiVietUtil
{
    public static function countComment($idBaiViet)
    {
        $model = Yii::$app->db->createCommand("SELECT  COUNT(`idbaiviet`) AS count_comment
                FROM binhluan
                RIGHT JOIN baiviet ON baiviet.`id` = binhluan.`idbaiviet` where idbaiviet = {$idBaiViet}")->queryOne();
        return $model;
    }
}