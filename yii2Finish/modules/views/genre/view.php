<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Genre */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Жанр', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genre-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить название', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <? /*= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
        ],
    ]) */?>

    <?php
    echo "<br>";

    echo "<div class='fon'><span><b>Название жанра: </b></span> " . "<span>" . $model->title . "</span></div>";

    echo "<br>";

    echo "<div class='fon'><span><b>Написанные книги: </b></span>";
    $numBook = 1;
    foreach ($model->books as $book){

        $rez = count($model->books);

        if($numBook == $rez){
            echo "<span>" . $book->title . "</span>" . ".";
        }else{
            echo "<span>" . $book->title . "</span>" . ", ";
            $numBook++;
        }
    }echo "</div>";

    ?>

</div>
