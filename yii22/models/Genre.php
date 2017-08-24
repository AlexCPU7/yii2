<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "genre".
 *
 * @property integer $id
 * @property string $title
 *
 * @property IdBookAuthorGenre[] $idBookAuthorGenres
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required', 'message' => 'Введите название жанра'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер жанра',
            'title' => 'Название',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getBooks(){
        return $this->hasMany(Book::className(),['id' => 'id_book'])
            ->viaTable('id_book_genre',['id_genre' => 'id']);
    }

    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id' => 'id_author'])
            ->viaTable('id_book_genre',['id_book' => 'id']);
    }

    public static function listAll($keyField = 'id', $valueField = 'title', $asArray = true)
    {
        $query = static::find();
        if ($asArray) {
            $query->select([$keyField, $valueField])->asArray();
        }

        return ArrayHelper::map($query->all(), $keyField, $valueField);
    }

    public function delete(){

        IdBookGenre::deleteAll(['id_genre' => $this->id]);

        return parent::delete();
    }
}
