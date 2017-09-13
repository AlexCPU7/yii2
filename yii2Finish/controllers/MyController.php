<?php

namespace  app\controllers;

use Yii;
use app\models\Author;
use app\models\Book;
use app\models\IdBookAuthor;
use app\models\IdBookGenre;
use app\models\BookSearch;
use app\models\Genre;
use yii\web\Controller;
use app\models\TableForm;


class MyController extends Controller {

    //public $layout = 'basic';

    public function actionIndex()
    {
        $title = 'Онлайн библиотека ';

        $model = new TableForm();
        //$database = Database::find()->orderby(['title' => SORT_ASC])->all();
        $database = Book::find()->all();

        //->where('id=3')      ->where(['id' => 3])
        //$database = Database::find()->asArray()->where(['like', 'title', 'g'])->all();

        /*$sql = "SELECT * FROM book WHERE title LIKE '%g%'";
        $sql = Database::findBySql($query)->all();*/

        //$tit = 'g';
        /*$sql = "SELECT * FROM book RIGHT JOIN id_book_author ON book.id = id_book_author.id_book WHERE title LIKE :search";
        $database = Book::findBySql($sql, [':search' => ''])->all();*/

        //$database = book::find()->all();

        return $this->render('index', compact('title', 'model', 'database'));
    }

    public function actionBook(){
        $book = Book::find()->joinWith('authors')->joinWith('genres')->all();
        //$book = Book::find()->where(['like', 'title', ''])->joinWith('authors')->joinWith('genres')->all();

        return $this->render('book', compact('book'));
    }

    public function actionAuthor(){

        $author = Author::find()->all();
        //$author = Yii::$app->db->createCommand('SELECT * FROM author')->All();

        return $this->render('author', compact('author'));
    }

    public function actionGenre(){

        $genre = Genre::find()->all();

        return $this->render('genre', compact('genre'));
    }
}