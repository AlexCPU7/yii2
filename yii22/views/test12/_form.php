<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Test12 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test12-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_test1')->textInput() ?>

    <?= $form->field($model, 'id_test2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
