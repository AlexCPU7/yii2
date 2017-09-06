<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use app\models\Author;
use app\models\Genre;

/* @var $this yii\web\View */
/* @var $model app\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="book-search">
    <?php Pjax::begin(['id' => 'new_country']); ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'title')->label('Название книги') ?>

    <?= $form->field($model, 'titleA')->checkboxList(
            Author::getToList()
    )->label('Авторы')
    ?>

    <?= $form->field($model, 'titleG')->checkboxList(
            Genre::getToList()
    )->label('Жанры')
    ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>

</div>
