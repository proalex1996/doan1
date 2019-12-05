<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LoaiTin\LoaiTin */

$this->title = 'Thêm Loại Tin';
$this->params['breadcrumbs'][] = ['label' => 'Loại Tin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loai-tin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
