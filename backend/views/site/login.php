<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đăng Nhập ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>


    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <div class="form-group">
        <div class="form-label-group">
            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control']) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="form-label-group">
            <?= $form->field($model, 'password')->passwordInput(['autofocus' => true, 'class' => 'form-control']) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
