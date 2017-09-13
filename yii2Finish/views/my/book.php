<?php
$this->title = 'Книги';
?>

<div class="filter col-md-2">
    <h1>Фильтр</h1>
    <?php//  echo $this->render('_search', ['model' => $searchModel]); ?>
</div>

<div class="catalog col-md-10">
    <h1><?=$this->title?></h1>

    <br>
    <table border=2>
        <?php foreach ($book as $book) { ?>
            <tr>
                <td><?=$book->title?></td>

                <td><?=$book->pic?></td>

                <td><?=$book->authors?></td>

                <td>
                <?php
                function($book) {
                    $result = '';
                    $num = 1;
                    foreach($book->authors as $n) {
                        $rez = count($book->authors);
                        if ($num == $rez) {
                            $result .= $n->title;
                        }else{
                            $result .= $n->title . ", ";
                            $num++;
                        }
                    }
                    return $result;
                }
                ?>
                </td>


            </tr>
        <?php }  ?>
    </table>
    <br>

</div>
