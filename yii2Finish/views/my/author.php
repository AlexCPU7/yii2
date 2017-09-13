<?php
$this->title = 'Авторы'
?>

<h1>Все представленные авторы</h1>

<?php //print_r($author[0])?>
<br>
<table border=2>
    <?php foreach ($author as $author) { ?>
        <tr>
            <td><?=$author->id?></td>
            <td><?=$author->title?></td>
        </tr>
    <?php }  ?>
</table>


