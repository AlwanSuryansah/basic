<?php

namespace app\models;

use Yii;
use yii\base\Model;

class PrediksiMo extends Model
{
    public $tanggal;
    public $jumlah;

    public function rules()
    {
        return [
            [['tanggal', 'jumlah'], 'required'],
            ['tanggal', 'safe'],        
                ];
    }
}