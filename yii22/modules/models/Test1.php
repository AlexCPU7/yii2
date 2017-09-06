<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "test1".
 *
 * @property integer $id
 * @property integer $tite
 *
 * @property Test12[] $test12s
 */
class Test1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tite'], 'required'],
            [['tite'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tite' => 'Tite',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTest12s()
    {
        return $this->hasMany(Test12::className(), ['id_test1' => 'id']);
    }
}
