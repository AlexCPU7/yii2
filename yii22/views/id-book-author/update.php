<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IdBookAuthor */

$this->title = 'Update Id Book Author: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Id Book Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="id-book-author-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
