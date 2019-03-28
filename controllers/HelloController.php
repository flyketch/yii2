<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller
{
    // ...现存的代码...

    public function actionSay($message = 'Hello')
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return "Hello China";
    }
}