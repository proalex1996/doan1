<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BinhLuan\BinhLuan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="binh-luan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idbaiviet')->textInput() ?>

    <?= $form->field($model, 'commenter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
