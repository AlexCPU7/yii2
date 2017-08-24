<?php
$this->title = 'Книги';
?>

    <h1>Все представленные книги</h1>

<br>
<table border=2>
    <?php foreach ($book as $book) { ?>
        <tr>
            <td><?=$book->id?></td>
            <td><?=$book->title?></td>
            <td><?=$book->description?></td>
            <td><?=$book->title?></td>
        </tr>
    <?php }  ?>
</table>
<br>
<?=$book->title?>