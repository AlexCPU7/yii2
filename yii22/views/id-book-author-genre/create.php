<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\IdBookAuthorGenre */

$this->title = 'Create Id Book Author Genre';
$this->params['breadcrumbs'][] = ['label' => 'Id Book Author Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-book-author-genre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
