<h1>rrr</h1>

<?php
$this->title = 'Каталог';
?>

<h1>Все представленные книги</h1>

<br>
<table border=2>
    <?php foreach ($database as $book) { ?>
        <tr>
            <td><?=$book->title?></td>
            <td><img src="<?=$book->pic?>" alt="альтернативный текст"></td>
        </tr>
    <?php }  ?>
</table>
<br>