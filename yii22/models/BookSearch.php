<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Book;

/**
 * BookSearch represents the model behind the search form about `app\models\Book`.
 */
class BookSearch extends Book
{
    /*public $custom; //!!!
    public $author; //z*/
    //public $authorsAsArray = array('al', 'go');
    //public $genresAsArray = array('lol', 'kek');
    public $titleA; //z
    public $titleG; //z

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'description', 'titleA', 'titleG', ], 'safe'],
            //[['imageFile'], 'file', 'extensions' => 'jpg, png'],
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
        $query = Book::find()->joinWith('authors')->joinWith('genres');

        //$query->joinWith(['authors' => function($query) { $query->from(['id_author' => 'id']); }]);

        /*if ($custom = $params['BookSearch']['custom']) {
            //$query->andFilterWhere(['id' => $custom]);

            $query->andFilterWhere(['=', 'title', $custom]);
        }*/

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->pagination->pageSize = 200;

        $dataProvider->setSort([
            'attributes' => array_merge($dataProvider->getSort()->attributes, [
                'titleA' => [
                    'asc' => ['author.title' => SORT_ASC],
                    'desc' => ['author.title' => SORT_DESC],
                    'default' => SORT_ASC,
                ],

                'titleG' => [
                    'asc' => ['genre.title' => SORT_ASC],
                    'desc' => ['genre.title' => SORT_DESC],
                    'default' => SORT_ASC,
                ]
            ])
        ]);

        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'book.title', $this->title])
              ->andFilterWhere(['like', 'description', $this->description])
              ->andFilterWhere(['like', 'author.title', $this->titleA])
              ->andFilterWhere(['like', 'genre.title', $this->titleG]);

        return $dataProvider;
    }
}
