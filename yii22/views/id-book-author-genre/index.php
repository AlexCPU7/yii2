<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IdBookAuthorGenreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Id Book Author Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-book-author-genre-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Id Book Author Genre', ['create'], ['class' => 'btn btn-success']) ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id',
                'contentOptions'=>['style'=>'width: 20px;'],
            ],

            /*[
                'attribute' => 'id_book',
                'format' => 'text',
                'label' => 'Книги',
            ],

            [
                'attribute' => 'id_author',
                'format' => 'text',
                'label' => 'Авторы',
            ],

            [
                'attribute' => 'id_genre',
                'format' => 'text',
                'label' => 'Жанры',
            ],*/

            [
                'attribute' => 'id_book',
                'format' => 'text',
                'label' => 'Книги',
                'value' => 'idBook.title',

            ],

            [
                'attribute' => 'id_book',
                'format' => 'text',
                'label' => 'Описание',
                'value' => 'idBook.description',
            ],

            [
                'attribute' => 'idBook.pic',
                'format' => 'image',
                'label' => 'Изображения',
                'value' => 'idBook.pic',
                'contentOptions'=>['style'=>'max-width: 100px;'],
            ],

            [
                'attribute' => 'id_author',
                'format' => 'text',
                'label' => 'Автор',
                'value' => 'idAuthor.title',
            ],

            [
                'attribute' => 'id_genre',
                'format' => 'text',
                'label' => 'Жанры',
                'value' => 'idGenre.title',
            ],


            /*[
                'attribute'=>'id_genre',
                'label'=>'Жанры',
                'format'=>'text', // Возможные варианты: raw, html
                'content'=>function($data){
                    return $data->getGenre();
                },
                'filter' => idBookAuthorGenre::getGenre()
            ],*/

            /*
            [
                'attribute' => 'id_author',
                'value' => 'author.title',
            ],
            [
                'attribute' => 'id_genre',
                'value' => 'genre.title',
            ],*/


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
