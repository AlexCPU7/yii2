<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "author".
 *
 * @property integer $id
 * @property string $title
 * @property string $customField
 *
 * @property IdBookAuthorGenre[] $idBookAuthorGenres
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required', 'message' => 'Введите название автора'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер автора',
            'title' => 'Название',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getBooks()
    {
        return $this->hasMany(Book::className(),['id' => 'id_book'])
            ->viaTable('id_book_author',['id_author' => 'id']);
    }

//    public function getGenres()
//    {
//        return $this->hasMany(Genre::className(), ['id' => 'id_genre'])
//            ->viaTable('id_book_genre',['id_book' => 'id'])
//            ->viaTable('book',['id' => 'id_book'])
//            ->viaTable('id_book_author',['id_author' => 'id']);
//    }

    /*public function getCustomField()
    {
        return 'custom value';
    }*/

    /*public function getGenres()
    {
        //return Genre::findAll(['title']);
        return Genre::find()->all();

    }*/

    public static function listAll($keyField = 'id', $valueField = 'title', $asArray = true)
    {
        $query = static::find();
        if ($asArray) {
            $query->select([$keyField, $valueField])->asArray();
        }

        return ArrayHelper::map($query->all(), $keyField, $valueField);
    }

    public function delete(){

        IdBookAuthor::deleteAll(['id_author' => $this->id]);

        return parent::delete();
    }
}
