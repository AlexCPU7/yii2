<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Book;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Книги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Дабавить книгу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'title',
                'label' => 'Название книги',
            ],

            [
                'attribute' => 'description',
                'label' => 'Описание',
            ],

            [
                'attribute' => 'pic',
                'label' => 'Изображение',
                'format' => 'image',
                'contentOptions'=>['style'=>'max-width: 50px;'],
            ],

            [
                'attribute' => 'titleA', //!!!!!
                'format' => 'text',
                'label' => 'Авторы',
                'value' => function($model) {
                    $result = '';
                    $num = 1;
                    foreach($model->authors as $n) {
                        $rez = count($model->authors);
                        if ($num == $rez) {
                            $result .= $n->title;
                        }else{
                            $result .= $n->title . ", ";
                            $num++;
                        }
                    }
                    return $result;
                }
            ],

            [
                'attribute' => 'titleG',
                'format' => 'text',
                'label' => 'Жанры',
                'value' => function($model) {
                    $result = '';
                    $num = 1;
                    foreach($model->genres as $n) {
                        $rez = count($model->genres);
                        if ($num == $rez) {
                            $result .= $n->title;
                        }else{
                            $result .= $n->title . ", ";
                            $num++;
                        }
                    }
                    return $result;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
