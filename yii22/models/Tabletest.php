<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabletest".
 *
 * @property integer $id
 * @property string $title
 * @property string $opisanie
 * @property resource $pic
 */
class Tabletest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tabletest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['opisanie', 'pic'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'opisanie' => 'Opisanie',
            'pic' => 'Pic',
        ];
    }
}
