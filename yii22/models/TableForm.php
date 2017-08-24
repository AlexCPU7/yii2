<?php
/**
 * Created by PhpStorm.
 * User: AlexCPU7
 * Date: 13.08.2017
 * Time: 15:59
 */

namespace app\models;
use yii\base\Model;

class TableForm extends Model{

    public $titleBook;
    public $titleAuthor;
    public $titleGenre;

    public function attributeLabels(){
        return [
            'titleBook' => ('Название книги'),
            'titleAuthor' => 'Имя атора',
            'titleGenre' => 'Жанр'
        ];
    }

    /*public function rules(){
        return [
            ['titleBook', 'safe'],
            ['titleAuthor', 'safe'],
            ['titleGenre', 'safe'],
        ];
    }*/

}