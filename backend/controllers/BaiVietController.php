<?php

namespace backend\controllers;

use Yii;
use backend\models\BaiViet\BaiViet;
use backend\models\BaiVietSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BaiVietController implements the CRUD actions for BaiViet model.
 */
class BaiVietController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all BaiViet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BaiVietSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BaiViet model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BaiViet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BaiViet();
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        $sqlGetListLoaiTin = Yii::$app->db->createCommand('select id, tenloaitin from loaitin')->queryAll();
        $listLoaiTin = array(
            "" => "--- Chon Loai Tin ---"
        );
        for ($i = 0; $i<count($sqlGetListLoaiTin); $i++) {
            $listLoaiTin[$sqlGetListLoaiTin[$i]["id"]] = $sqlGetListLoaiTin[$i]["tenloaitin"];
        }
        return $this->render('create', [
            'model' => $model,
            'ListLoaiTin' => $listLoaiTin
        ]);
    }

    /**
     * Updates an existing BaiViet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        $sqlGetListLoaiTin = Yii::$app->db->createCommand('select id, tenloaitin from loaitin')->queryAll();
        $listLoaiTin = array(
            "" => "--- Chon Loai Tin ---"
        );
        for ($i = 0; $i<count($sqlGetListLoaiTin); $i++) {
            $listLoaiTin[$sqlGetListLoaiTin[$i]["id"]] = $sqlGetListLoaiTin[$i]["tenloaitin"];
        }
        return $this->render('update', [
            'model' => $model,
            'ListLoaiTin' => $listLoaiTin,
        ]);
    }

    /**
     * Deletes an existing BaiViet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BaiViet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BaiViet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BaiViet::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Bài Viết Không Tồn Tại');
    }
}
