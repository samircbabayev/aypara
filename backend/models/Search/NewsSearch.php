<?php

namespace backend\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\News;

/**
 * NewsSearch represents the model behind the search form of `backend\models\News`.
 */
class NewsSearch extends News
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'watched_count', 'status', 'order'], 'integer'],
            [['org_id', 'org_category_name', 'title', 'text', 'resource_name', 'resource_link', 'image', 'org_created_at', 'created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = News::find();

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
            'category_id' => $this->category_id,
            'watched_count' => $this->watched_count,
            'org_created_at' => $this->org_created_at,
            'created_at' => $this->created_at,
            'status' => $this->status,
            'order' => $this->order,
        ]);

        $query->andFilterWhere(['like', 'org_id', $this->org_id])
            ->andFilterWhere(['like', 'org_category_name', $this->org_category_name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'resource_name', $this->resource_name])
            ->andFilterWhere(['like', 'resource_link', $this->resource_link])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
