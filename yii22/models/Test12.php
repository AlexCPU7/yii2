<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test12".
 *
 * @property integer $id
 * @property integer $id_test1
 * @property integer $id_test2
 */
class Test12 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test12';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_test1', 'id_test2'], 'required'],
            [['id_test1', 'id_test2'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_test1' => 'Id Test1',
            'id_test2' => 'Id Test2',
        ];
    }
}
