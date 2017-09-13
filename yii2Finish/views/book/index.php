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

$this->title = 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="book-index">

    <div class="filter col-md-2">
        <h1>Фильтр</h1>
        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>

    <div class="catalog col-md-10">
        <h1><?= Html::encode($this->title) ?></h1>


        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => function($model)
            {
                return
                    '<a href="/book/view?id='.$model->id.'"><div class="catalogPic" >
                            <img src="' . $model->pic . '" ></div>
                        <div class="catalogTitle" >'
                            .$model->title.
                        '</div></a>';
            },

            'options' => [
                'tag' => 'div',
                'class' => 'news-list',
                'id' => 'news-list',
            ],

            'layout' => "{pager}\n{summary}\n{items}\n{pager}",
            'summary' => false,
            'summaryOptions' => [
                'tag' => 'span',
                'class' => 'my-summary'
            ],

            'itemOptions' => [
                'tag' => 'div',
                'class' => 'news-item',
            ],

            'emptyText' => '<p>Список пуст</p>',
            'emptyTextOptions' => [
                'tag' => 'p'
            ],

            'pager' => [
                'firstPageLabel' => 'Первая',
                'lastPageLabel' => 'Последняя',
                'nextPageLabel' => 'Следующая',
                'prevPageLabel' => 'Предыдущая',
                'maxButtonCount' => 5,
            ],

        ])?>
    </div>

</div>
