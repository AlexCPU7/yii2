<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Test1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Test1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Test1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tite',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
