<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "id_book_genre".
 *
 * @property integer $id
 * @property integer $id_book
 * @property integer $id_genre
 *
 * @property Book $idBook
 * @property Genre $idGenre
 */
class IdBookGenre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'id_book_genre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_book', 'id_genre'], 'integer'],
            [['id_book'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['id_book' => 'id']],
            [['id_genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['id_genre' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_book' => 'Id Book',
            'id_genre' => 'Id Genre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBook()
    {
        return $this->hasOne(Book::className(), ['id' => 'id_book']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'id_genre']);
    }
}
