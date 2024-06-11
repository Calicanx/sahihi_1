<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Leads extends ActiveRecord
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
