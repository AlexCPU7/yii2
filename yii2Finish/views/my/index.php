<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Home';
?>

<h1>База данных</h1>

<?php echo ($title) ?>

<br><br>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testIdForm']])?>
<?=$form->field($model, 'titleBook') ?>
<?=$form->field($model, 'titleAuthor') ?>
<?=$form->field($model, 'titleGenre') ?>
<?=Html::submitButton('Поиск', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end();?>
<br>

<?php echo count($database); ?>
    <br>
<?php echo count($database[0]->idbookauthor) ?>
    <br>
<?php echo count($dataauthor) ?>
    <br>
<?php //echo var_dump($database) ?>

    <br>
        <table border=2>
            <?php foreach ($database as $databas) { ?>
                <tr>
                    <?php $bookss = $databas->idbookauthor; ?>
                    <?php foreach ($bookss as $book){ ?>
                        <td><?=$databas->id?></td>
                        <td><?=$databas->title?></td>
                        <td><?=$databas->description?></td>
                        <?php $authors = $book->author; ?>
                        <?php foreach ($authors as $author){ ?>
                            <td><?=$author['title']?></td>

                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php }  ?>
        </table>
    <br>

<!--
    <br>
    <table border=2>
        <?php $lim = count($database);
        for($i = 0; $i < 2; $i++){
            echo '<tr>';
                $bookss = $databas->idbookauthor;
                foreach ($bookss as $book){
                    echo '<td>' . $databas->id . '</td>';
                    echo '<td>' . $databas->title . '</td>';
                    echo '<td>' . $databas->description . '</td>';


                    $authors = $book->author;
                    foreach ($authors as $author){
                        echo '<td>' . $author->title . '</td>';

                    }

                }
            echo '</tr>';

            }  ?>
    </table>
    <br>-->

<?php

foreach ($database as $databa){

    echo '<li>' . $databa->title . '</li>';
    //echo '<li>' . $databa['id_book'] . '</li>';
    $bookss = $databa->idbookauthor;
    foreach ($bookss as $book) {
        $authors = $book->author;
        foreach ($authors as $author){
            echo '<ul>';
            echo '<li>' . $author->title . '</li>';
            echo '</ul>';
        }

    }

}

echo "<br><br>";

foreach ($database as $databa){
        $bookss = $databa->idbookauthor;
    foreach ($bookss as $book) {
        echo '<li>' . $book->id_book . '</li>';
        $authors = $book->author;
        foreach ($authors as $author){
            echo '<ul>';
                echo '<li>' . $author->title . '</li>';
            echo '</ul>';
        }


    }
}

?>

<?php
/*
$this -> registerJsFile('@web/js/script.js');

$js = <<<JS
    $('#btn').on('click', function(){
       $.ajax({
         url: 'index.php?r=my/index',
         date: {test: '123'},
         type: 'GET',
         success: function(res) {
             console.log(res);
         },
         error: function() {
             alert('ERROR!');
         }
       });
    });
JS;

$this -> registerJs($js);
*/?>