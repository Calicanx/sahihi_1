<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "leads".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property int|null $customer
 */
class Leads extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leads';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer'], 'integer'],
            [['name', 'email'], 'string', 'max' => 100],
            [['email'], 'unique'],
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
            'email' => 'Email',
            'customer' => 'Customer',
        ];
    }
}
