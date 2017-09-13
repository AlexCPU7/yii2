<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$this->registerJs(
    '$("document").ready(function(){ 
            $("#new_country").on("pjax:end", function() {
                $.pjax.reload({container:"#countries"});  //Reload GridView
            });
        });'
);
?>

<div class="book-search">
    <?php Pjax::begin(['id' => 'new_country']); ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'title')->label('Название книги') ?>

    <?= $form->field($model, 'titleA')->checkboxList(
        ['Alex' => 'Alex', 'Joo' => 'Joo', 'Den' => 'Den',]
    )->label('Авторы')
    ?>

    <?= $form->field($model, 'test1')->checkboxList(
        ['Alex' => 'Alex']
    )
    ?>

    <?= $form->field($model, 'test2')->checkboxList(
        ['Joo' => 'Joo']
    )
    ?>

    <?= $form->field($model, 'titleG')->checkboxList(
        ['комедия' => 'комедия', 'ужасы' => 'ужасы', 'драма' => 'драма', 'приключения' => 'приключения']
    )->label('Жанры')
    ?>

    <?//= $form->field($model, 'custom') ?>

    <?//= $form->field($model, 'titleA') ?>

    <?//= $form->field($model, 'titleG') ?>

    <?//= $form->field($model, 'author') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>

</div>
