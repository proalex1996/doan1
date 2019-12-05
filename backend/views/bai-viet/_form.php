<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BaiViet\BaiViet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bai-viet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6, 'class' => 'ckeditor']) ?>

    <?= $form->field($model, 'thumbnail')->fileInput()?>

    <?= $form->field($model, 'idloaitin')->dropDownList($ListLoaiTin) ?>

    <div class="form-group">
        <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
