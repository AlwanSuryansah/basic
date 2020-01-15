<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property string $role
 */
class TbUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'authKey', 'accessToken', 'role'], 'required'],
            [['username', 'password'], 'string', 'max' => 30],
            [['authKey', 'accessToken'], 'string', 'max' => 50],
            [['role'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'role' => 'Role',
        ];
    }
}
