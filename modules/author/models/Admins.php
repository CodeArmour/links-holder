<?php

namespace app\modules\author\models;

use Yii;

/**
 * This is the model class for table "admins".
 *
 * @property int $id
 * @property string $name
 * @property string $gmail
 * @property string $password
 */
class Admins extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admins';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'gmail', 'password'], 'required'],
            [['name', 'gmail', 'password'], 'string', 'max' => 255],
            [['gmail'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'gmail' => Yii::t('app', 'Gmail'),
            'password' => Yii::t('app', 'Password'),
        ];
    }
}
