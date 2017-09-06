<?php

namespace app\modules\models;


use Yii;
use yii\base\Behavior;
use \voskobovich\behaviors\ManyToManyBehavior;
use yii\helpers\ArrayHelper;
use app\modules\models\IdBookAuthor;
use mongosoft\file\UploadBehavior;
use yii\web\UploadedFile;


/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 *
 * @property IdBookAuthorGenre[] $idBookAuthorGenres
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }
    public $imageFile;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required', 'message' => 'Введите название книги'],
            [['pic'], 'required', 'message' => 'Выберите изображение'],
            [['description', 'pic'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['author_list'], 'safe'],
            [['titleA', 'titleG'], 'each', 'rule' => ['integer']],
            [['pic'], 'file', 'extensions' => 'jpg, png', 'message' => 'Поддерживаются только jpg и png форматы' ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [

            'title' => 'Название',
            'description' => 'Описание',
            'pic' => 'Изображение',
            'titleA' => 'Авторы',
            'titleG' => 'Жанры',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => ManyToManyBehavior::className(),
                'relations' => [
                    'titleA' => 'authors',
                    'titleG' => 'genres',
                ],
            ],
        ];
    }

    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id' => 'id_author'])
            ->viaTable('id_book_author',['id_book' => 'id']);
    }

    public function getGenres()
    {
        return $this->hasMany(Genre::className(), ['id' => 'id_genre'])
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

    public function delete()
    {
        IdBookAuthor::deleteAll(['id_book'=>$this->id]);

        IdBookGenre::deleteAll(['id_book'=>$this->id]);

        return parent::delete(); // TODO: Change the autogenerated stub
    }


}