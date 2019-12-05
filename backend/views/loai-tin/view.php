<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\LoaiTin\LoaiTin */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Loai Tins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="loai-tin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tenloaitin',
        ],
    ]) ?>
    <p>
        <?= Html::a('Trở Về', ["/loai-tin"], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
