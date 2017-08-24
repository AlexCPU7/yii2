<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tabletest */

$this->title = 'Create Tabletest';
$this->params['breadcrumbs'][] = ['label' => 'Tabletests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabletest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
