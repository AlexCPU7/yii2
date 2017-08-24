<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Book;
use app\models\Author;
use app\models\Genre;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

   <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php if (!$model->isNewRecord): ?>
        <?= Html::label('Текущая картинка') ?>
        <?= Html::img($model->pic) ?>
        <?= $form->field($model, 'pic')->fileInput()->label('Заменить изображение') ?>
    <?php else: ?>
        <?= $form->field($model, 'pic')->fileInput()->label('Добавить изображение') ?>
    <?php endif ?>

    <?= $form->field($model, 'titleA')->dropDownList(Author::listAll(), ['multiple' => true]) ?>
    <?= $form->field($model, 'titleG')->dropDownList(Genre::listAll(), ['multiple' => true]) ?>

    <?php/*
    $items = [
        //'$model->id' => $model->title,
        '0' => 'Активный',
        '1' => 'Отключен',
        '2'=>'Удален'
    ];
    $params = [
        'prompt' => 'Выберите статус...'
    ];
    echo $form->field($model, 'title')->dropDownList(
        $items, ['prompt' => 'dfg']
    );
*/?>
    <?/*= $form->field($model, 'author_list')
        ->dropDownList( ['multiple' => true])*/?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


