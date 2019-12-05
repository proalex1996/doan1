<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BaiViet\BaiViet */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Bài Viết', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bai-viet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sửa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chăc muốn xóa bài viết',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title:ntext',
            'description:ntext',
            'content:ntext',
            'thumbnail:ntext',
            'posttime',
            'idloaitin'
        ],

    ])
    ?>
    <p>
        <?= Html::a('Trở Về', ["/bai-viet"], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
