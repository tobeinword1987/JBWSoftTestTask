<?php

namespace app\controllers;

use Yii;
use app\models\News;
use app\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\rest\ActiveController;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends ActiveController
{
    public $modelClass = 'app\models\News';
}
