<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\TbDatatran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-datatran-form">

    <?php $form = ActiveForm::begin(); ?>


    <?=
	$form->field($model, 'tanggl')->widget(DatePicker::classname(), [
	'options' => ['placeholder' => 'Masukkan tanggal Prediksi'],
	'pluginOptions' => [
		'autoclose' => true,
		'format' => 'yyyy/mm/dd'
	]
]);
 ?>


    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
