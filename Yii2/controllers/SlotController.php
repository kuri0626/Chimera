<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SlotController extends Controller
{
    public function actionIndex() {
        return $this->render('/site/slot');
    }
}
