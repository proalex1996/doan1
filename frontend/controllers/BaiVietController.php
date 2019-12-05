<?php


namespace frontend\controllers;


use frontend\models\BaiViet\BaiViet;
use frontend\models\BaiViet\BaiVietUtil;
use frontend\models\BinhLuan\BinhLuan;
use Yii;
use yii\web\Controller;

class BaiVietController extends Controller
{
    public  function actionChiTiet($id = null)
    {
        $modelBaiViet = new BaiViet();
        if (!is_null($id)) {
            $dataBaiViet = $modelBaiViet->getChiTietBaiViet($id);
            $listComment = BinhLuan::findAll(['idbaiviet' => $id]);
            $listTrangChu = $modelBaiViet->getTrangChu();
            $countComment = BaiVietUtil::countComment($id);
            $this->countView($id);
        }
        return $this->render('chi-tiet',[
            'dataBaiViet' => $dataBaiViet,
            'countComment' => $countComment,
            'listComment' => $listComment,
            'listTrangChu'=>$listTrangChu,
        ]);
    }
    public function countView($postID)
    {
        $sessionKey = 'post_' . $postID;
        $session = Yii::$app->session;
        $sessionView = $session[$sessionKey];
        if (!$sessionView) { // nếu chưa có session
            $session[$sessionKey]= 1; //set giá trị cho session
            if (!empty($postID)) {
                $countView = Yii::$app->db->createCommand('UPDATE baiviet SET viewcount = viewcount + 1 WHERE id = ' . $postID);
                $countView->execute();
            }
        }
    }
}
