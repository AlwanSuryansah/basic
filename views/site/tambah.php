<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\TbDatatranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Jumlah Kebutuhan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-tambah">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggl',
            'jumlah',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
