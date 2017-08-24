<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TabletestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tabletests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabletest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tabletest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'opisanie:ntext',

            [
                'attribute' => 'pic',
                'label' => 'Изображение',
                'format' => 'image',
                'contentOptions'=>['style'=>'max-width: 50px;'],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
