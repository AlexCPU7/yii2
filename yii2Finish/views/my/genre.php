<?php
$this->title = 'Жанры';
?>

<h1>Все представленные жанры</h1>

<br>
<table border=2>
    <?php foreach ($genre as $genre) { ?>
        <tr>
            <td><?=$genre->id?></td>
            <td><?=$genre->title?></td>
        </tr>
    <?php }  ?>
</table>
