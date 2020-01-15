<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbHistory */

$this->title = 'Update Tb History: ' . $model->id_history;
$this->params['breadcrumbs'][] = ['label' => 'Tb Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_history, 'url' => ['view', 'id' => $model->id_history]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-history-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
