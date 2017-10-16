<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;


/**
 * Customers controller
 */
class CustomersController extends Controller
{
    public function actionIndex ()
    {
        $records = $this->findRecordsByQuery();
        return $this->render('index', compact('records'));
    }
}
