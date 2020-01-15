<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\grid\GridView;



$this->title = 'Prediksi' ;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="prediksi-prediksiii" align="center" >
    <h1><?= Html::encode($this->title) ?></h1>


<?php 

$form = ActiveForm::begin([
	'method' => 'post',
	'action' => Url::to(['']),
]); 
?>

 <samp style="margin-bottom: 30px;"><?= html::a('Hari ke 3',['/prediksi/harike3'],['class' => 'btn btn-primary'])  ?> </samp>    
 <samp style="margin-bottom: 30px;"><?= html::a('Hari ke 4',['/prediksi/harike4'],['class' => 'btn btn-primary'])  ?> </samp>    
 <samp style="margin-bottom: 30px;"><?= html::a('Hari ke 5',['/prediksi/harike5'],['class' => 'btn btn-primary'])  ?> </samp>    
 <samp style="margin-bottom: 30px;"><?= html::a('Hari ke 6',['/prediksi/harike6'],['class' => 'btn btn-primary'])  ?> </samp>    
 <samp style="margin-bottom: 30px;"><?= html::a('Hari ke 7',['/prediksi/harike7'],['class' => 'btn btn-primary'])  ?> </samp>    

<?php ActiveForm::end(); ?>


</div>
