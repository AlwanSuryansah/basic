<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_history".
 *
 * @property int $id_history
 * @property int $id_data
 * @property string $hari
 * @property string $tanggal
 * @property int $jumlah_prediksi
 * @property string $waktu
 *
 * @property TbDatatran $data
 */
class TbHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [[ 'jumlah_prediksi'], 'integer'],
            [[ 'waktu'], 'safe'],
            [['hari'], 'string', 'max' => 15],
        
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_history' => 'Id History',
            'hari' => 'Hari',
            'jumlah_prediksi' => 'Jumlah Prediksi',
            'waktu' => 'Waktu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getData()
    {
        return $this->hasOne(TbDatatran::className(), ['id_data' => 'id_data']);
    }
}
