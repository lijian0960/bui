<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ServiceWx */

$this->title = 'Create Service Wx';
$this->params['breadcrumbs'][] = ['label' => 'Service Wxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-wx-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
