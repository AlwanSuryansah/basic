<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbDatatran */

$this->title = 'Tambah Data ';
$this->params['breadcrumbs'][] = ['label' => 'Data Jumlah Kebutuahn', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-datatran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
