<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;

class UserController extends Controller
{
    public function actionIndex() {
        return $this->render('/site/users/create');
    }
}
