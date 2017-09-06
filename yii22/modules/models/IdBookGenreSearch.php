<?php

namespace app\modules\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\models\IdBookGenre;

/**
 * IdBookGenreSearch represents the model behind the search form about `app\models\IdBookGenre`.
 */
class IdBookGenreSearch extends IdBookGenre
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_book', 'id_genre'], 'integer'],
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
        $query = IdBookGenre::find();

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
            'id_book' => $this->id_book,
            'id_genre' => $this->id_genre,
        ]);

        return $dataProvider;
    }
}
