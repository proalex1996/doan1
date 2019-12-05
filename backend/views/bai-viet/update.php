<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BaiViet\BaiViet */

$this->title = 'Sửa Bài Viết: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Bài Viết', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bai-viet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ListLoaiTin' => $ListLoaiTin,
    ]) ?>

</div>
