<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


$this->title = 'Master Data';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-masterdata" align="center">
    <h1><?= Html::encode($this->title) ?></h1>

        <samp style="margin-bottom: 30px;"><?= html::a('Data Jumalah kebutuhan',['/tb-datatran/index'],['class' => 'btn btn-primary'])  ?> </samp>    

 