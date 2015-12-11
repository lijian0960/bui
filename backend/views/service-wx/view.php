<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ServiceWx */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Service Wxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-wx-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nickname',
            'wx',
            'type',
            'sort',
            'status',
            'qrcode_url:url',
            'qrcode',
            'create_time',
            'update_time',
        ],
    ]) ?>

</div>
