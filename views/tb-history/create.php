<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbHistory */

$this->title = 'Create Tb History';
$this->params['breadcrumbs'][] = ['label' => 'Tb Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
