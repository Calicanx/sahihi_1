<?php

namespace app\models;

use Yii;
use yii\base\ActiveRecord;

class Lead extends ActiveRecord
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
