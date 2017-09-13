<?php
/**
 * Created by PhpStorm.
 * User: AlexCPU7
 * Date: 31.08.2017
 * Time: 19:08
 */

namespace app\controllers;

use yii\web\Controller;
use app\modules\models\Book;

class CatalogController extends Controller
{
    public function actionIndex()
    {
        $database = Book::find()->all();

        return $this->render('index', compact('database'));
    }
}