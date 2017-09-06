<?php

use app\models\Book;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Книги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-view">

    <h1> <?= Html::encode($this->title) ?> </h1>

    <?php

    echo "<div class='fon'><img src=" . $model->pic . "> </div>";

    echo "<br>";

    echo "<div class='fon'><span><b>Книга под названием: </b></span> " . "<span>" . $model->title . "</span></div>";

    echo "<br>";

    echo "<div class='fon'><span><b>Описание: </b></span> " . "<span>" . $model->description . "</span></div>";

    echo "<br>";

    echo "<div class='fon'><span><b>Автор: </b></span>";
    $numAuthor = 1;
    foreach ($model->authors as $author){

        $rez = count($model->authors);

        if($numAuthor == $rez){
            echo "<span>" . $author->title . "</span>" . ".";
        }else{
            echo "<span>" . $author->title . "</span>" . ", ";
            $numAuthor++;
        }
    }echo "</div>";

    echo "<br>";

    echo "<div class='fon'><span><b>Используемые жанры: </b></span>";
    $numGenre = 1;
    foreach ($model->genres as $genre){

        $rez = count($model->genres);

        if($numGenre == $rez){
            echo "<span>" . $genre->title . "</span>" . ".";
        }else{
            echo "<span>" . $genre->title . "</span>" . ", ";
            $numGenre++;
        }
    }echo "</div>";
    ?>
</div>