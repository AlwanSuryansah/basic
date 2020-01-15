<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrediksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prediksi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

 

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hari',
            'tanggl',
            'jumlah',

        ],
    ]); 
    ?>

<?= $this->render('prediksiii', [
        'model' => $model,
    ]) ?>
    

</div>
