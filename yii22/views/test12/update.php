<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Test12 */

$this->title = 'Update Test12: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Test12s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test12-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
