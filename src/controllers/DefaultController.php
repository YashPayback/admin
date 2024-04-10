<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `Admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        echo __METHOD__; die;
        return $this->render('index');

    }
    public function actionView()
    {
        return $this->render('view');
    }
}
