<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BinhLuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Football-Bình Luận';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="binh-luan-index">

    <h1>Bình Luận</h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'commenter',
            'email:email',
             'content_comment',

          [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {myButton}',  // the default buttons + your custom button
                'buttons' => [
                        'delete' => function($url, $model, $key) {     // render your custom button
                        return "<p><a href='". $url ."' class='btn btn-danger btn-xs'><span class='fa fa-minus'></span>Xóa</a></p>";
                    }
                ]
            ]
        ],
    ]); ?>


</div>
