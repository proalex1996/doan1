<?php


namespace frontend\controllers;


use frontend\models\BaiViet\BaiViet;
use frontend\models\BaiViet\BaiVietUtil;
use frontend\models\BinhLuan\BinhLuan;
use frontend\models\BinhLuan\BinhLuanUtill;
use Yii;
use yii\web\Controller;

class VleagueController extends Controller
{
    public  function actionIndex()
    {
        $modelBaiViet = new BaiViet();
        $listBaiViet = $modelBaiViet->getListBaiViet(2);
        $listBaiViet1 = $modelBaiViet->getListBaiViet(4);
        return $this->render('index',[
            'listBaiViet' => $listBaiViet,
            'listBaiViet1' => $listBaiViet1,


        ]);
       //return parent::actions(); // TODO: Change the autogenerated stub
    }


    public function actionPostComment()
    {
        $result = [
            "status" => 200,
            "data" => null
        ];
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $post = Yii::$app->request->getBodyParams();
        $commentModel = BinhLuanUtill::insertComment($post);
        $result['data'] = $commentModel;
        return $this->asJson($result);
    }

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
}