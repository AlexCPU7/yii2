<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IdBookAuthorGenre */

$this->title = $model->idBook->title;
$this->params['breadcrumbs'][] = ['label' => 'Id Book Author Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-book-author-genre-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'idBook.title',
            'idBook.description',
            'idAuthor.title',
            'idGenre.title',
            'idBook.pic:image',
        ],
    ]) ?>

</div>
