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
    public $custom; //!!!
    public $author;
    public $genre;

    public $titleA;
    public $titleG;
    public $fullName;

    public $test1;
    public $test2;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'description', 'titleA', 'titleG', 'test1', 'test2', ], 'safe'],
        ];
    }
    /**
     * @inheritdoc
     */
    public function scenarios()
    {
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
        $query = Book::find()->select([Book::tableName().'.id'])->joinWith('authors')->joinWith('genres');

        /*$query->joinWith(['authors' => function($query) { $query->from(['id_author' => 'id']); }]);
        if ($custom = $params['BookSearch']['custom']) {
            //$query->andFilterWhere(['id' => $custom]);
            $query->andFilterWhere(['LIKE', 'title', $custom]);
        }*/

        $dataProvider = new ActiveDataProvider([
            'query' => Book::find()->where(['in', 'id', $query]),
        ]);
        $dataProvider->pagination->pageSize = 6;

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

        if(!($this->titleA == null)) {
            $authorsFilter = ['or'];
            foreach ($this->titleA as $author) {
                $authorsFilter[] = ['like', 'author.title', $author];
            }
        }else{
            $authorsFilter = ['like', 'author.title', ''];
        }

        if(!($this->titleG == null)) {
            $genresFilter = ['or'];
            foreach ($this->titleG as $genre) {
                $genresFilter[] = ['like', 'genre.title', $genre];
            }
        }else{
            $genresFilter = ['like', 'genre.title', ''];
        }

        $query->andFilterWhere(['like', 'book.title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere($authorsFilter)
            ->andFilterWhere($genresFilter)
        ;
        return $dataProvider;
    }
}