<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\IdBookAuthorGenre;
use app\models\Book;
use app\models\Author;
use app\models\Genre;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\IdBookAuthorGenre */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="id-book-author-genre-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'id_book')->textInput() ?>

    <?//= $form->field($model, 'id_author')->textInput() ?>

    <?//= $form->field($model, 'id_genre')->textInput() ?>


    <?= $form->field($model, 'id_book')->dropDownList(ArrayHelper::map(Book::find()->all(),'id','title')) ?>
    <?= $form->field($model, 'id_author')->dropDownList(ArrayHelper::map(Author::find()->all(),'id','title')) ?>
    <?= $form->field($model, 'id_genre')->dropDownList(ArrayHelper::map(Genre::find()->all(),'id','title')) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
