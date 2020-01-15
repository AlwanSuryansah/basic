<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-history-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'hari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_prediksi')->textInput() ?>

    <?= $form->field($model, 'waktu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
