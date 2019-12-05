<?php


namespace frontend\controllers;


use frontend\models\BaiViet\BaiViet;
use frontend\models\User\User;
use yii\web\Controller;

class DoiTuyenController extends Controller
{
    public function actionIndex()
    {
        $modelBaiViet = new BaiViet();
        $listBaiViet = $modelBaiViet->getListBaiViet(1);
        $listWC = $modelBaiViet->getListBaiViet(3);
        $listTrangChu = $modelBaiViet->getTrangChu();
        return $this->render('index',[
            'listBaiViet' => $listBaiViet,
            'listTrangChu'=> $listTrangChu,
            'listWC' => $listWC,

        ]);
    }


}