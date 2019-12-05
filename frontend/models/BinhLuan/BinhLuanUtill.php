<?php


namespace frontend\models\BinhLuan;


use Yii;

class BinhLuanUtill
{
    public static function insertComment($post){
        $fullName = $post['fullName'];
        $email = $post['email'];
        $content = $post['content'];
        $idBaiViet = $post['idBaiViet'];
        $sql = "INSERT INTO binhluan (idbaiviet,commenter,email,content_comment)VALUE($idBaiViet,'$fullName','$email', '$content' )";
        Yii::$app->db->createCommand($sql)->execute();
        $posttime = BinhLuan::find()
                    ->where(['id' => Yii::$app->db->getLastInsertID(), 'idbaiviet' => $idBaiViet])
                    ->one();
        return $posttime;
    }
}