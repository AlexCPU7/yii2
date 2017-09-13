<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\IdBookAuthor */

$this->title = 'Create Id Book Author';
$this->params['breadcrumbs'][] = ['label' => 'Id Book Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-book-author-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
