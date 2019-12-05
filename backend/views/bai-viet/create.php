<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BaiViet\BaiViet */

$this->title = 'Thêm Bài Viết';
$this->params['breadcrumbs'][] = ['label' => 'Bài Viết', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bai-viet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ListLoaiTin' => $ListLoaiTin,
    ]) ?>

</div>
