<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\IdBookGenre */

$this->title = 'Create Id Book Genre';
$this->params['breadcrumbs'][] = ['label' => 'Id Book Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-book-genre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
