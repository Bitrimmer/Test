<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $name
 * @property int $inn
 * @property string $ceo
 * @property string|null $address
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'inn', 'ceo'], 'required'],
            [['inn'], 'integer'],
            [['address'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['ceo'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'inn' => 'Inn',
            'ceo' => 'Ceo',
            'address' => 'Address',
        ];
    }
}
