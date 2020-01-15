<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_datatran".
 *
 * @property int $id_data
 * @property string $tanggl
 * @property int $jumlah
 */
class TbDatatran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_datatran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggl', 'jumlah'], 'required'],
            [['tanggl'], 'safe'],
            [['jumlah'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_data' => 'Id Data',
            'tanggl' => 'Tanggal',
            'jumlah' => 'Jumlah',
        ];
    }
}
