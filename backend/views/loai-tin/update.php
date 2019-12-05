<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LoaiTin\LoaiTin */

$this->title = 'Sửa Thể Loại ';
$this->params['breadcrumbs'][] = ['label' => 'Loại Tin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loai-tin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
