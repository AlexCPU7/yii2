<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Test12 */

$this->title = 'Create Test12';
$this->params['breadcrumbs'][] = ['label' => 'Test12s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test12-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
