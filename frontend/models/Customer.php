<?php

namespace frontend\models;

use Yii;
use yii\base\Model;


class Customer extends Model
{
    public $name;
    public $birth_date;
    public $notes = '';
    public $phone = [];

    public function __construct($name, $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $birth_date;
    }
}
