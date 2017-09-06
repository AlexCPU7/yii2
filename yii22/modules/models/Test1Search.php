<?php

namespace app\modules\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\models\Test1;

/**
 * Test1Search represents the model behind the search form about `app\models\Test1`.
 */
class Test1Search extends Test1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tite'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Test1::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tite' => $this->tite,
        ]);

        return $dataProvider;
    }
}
