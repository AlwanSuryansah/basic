<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\grid\GridView;



$this->title = 'Prediksi' ;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-prediksi" align="center" >
    <h1><?= Html::encode($this->title) ?></h1>

<?php 

$form = ActiveForm::begin([
	'method' => 'post',
	'action' => Url::to(['site/prediksi']),
]); 
?>


<?=
	$form->field($model, 'tanggal')->widget(DatePicker::classname(), [
	'options' => ['placeholder' => 'Masukkan tanggal Prediksi'],
	'pluginOptions' => [
		'autoclose' => true,
		'format' => 'yyyy/mm/dd'
	]
]);
 ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>



<?php ActiveForm::end(); ?>

</div>

