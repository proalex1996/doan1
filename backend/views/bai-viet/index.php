<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BaiVietSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bài Viết';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bai-viet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Thêm bài viết', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
//    $colCheckBox = [
//            'class' => ''
//    ];
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title:ntext',
            'description:ntext',
            'thumbnail:ntext',
            'posttime',
            'tenloaitin',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {myButton}',  // the default buttons + your custom button
                'buttons' => [
                    'update' => function($url, $model, $key) {     // render your custom button
                        return "<p><a href='". $url ."' class='btn btn-primary btn-xs'><span class='fa fa-pen'></span>Sửa</a></p>";
                    },

                    'delete' => function($url, $model, $key) {     // render your custom button
                        return "<p><a href='". $url ."' class='btn btn-danger btn-xs'><span class='fa fa-minus'></span>Xóa</a></p>";
                    }
                ]
            ]
        ],
    ]);
    ?>


</div>
