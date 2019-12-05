<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LoaiTinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Football-Loại Tin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loai-tin-index">

    <h1>Loại Tin</h1>

    <p>
        <?= Html::a('Thêm Loại Tin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'tenloaitin',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {myButton}',  // the default buttons + your custom button
                'buttons' => [
                    'update' => function($url, $model, $key) {     // render your custom button
                        return "<p><a href='". $url ."' class='btn btn-primary btn-xs'><span class='fa fa-pen'></span>    Sửa</a></p>";
                    },
                    'delete' => function($url, $model, $key) {     // render your custom button
                        return "<p><a href='". $url ."' class='btn btn-danger btn-xs'><span class='fa fa-minus'></span>   Xóa</a></p>";
                    }
                ]
            ]
        ],
    ]); ?>


</div>
