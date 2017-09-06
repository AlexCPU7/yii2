<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "id_book_author".
 *
 * @property integer $id
 * @property integer $id_book
 * @property integer $id_author
 *
 * @property Author $idAuthor
 * @property Book $idBook
 */
class IdBookAuthor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'id_book_author';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_book', 'id_author'], 'integer'],
            [['id_author'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['id_author' => 'id']],
            [['id_book'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['id_book' => 'id']],
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
            'id_author' => 'Id Author',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'id_author']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBook()
    {
        return $this->hasOne(Book::className(), ['id' => 'id_book']);
    }
}
