<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Stories;

/**
 * StoriesSearch represents the model behind the search form about `backend\models\Stories`.
 */
class StoriesSearch extends Stories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['story_id', 'page_id_fk'], 'integer'],
            [['story_title', 'story_subtitle', 'story_status'], 'safe'],
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
        $query = Stories::find();

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
            'story_id' => $this->story_id,
            'page_id_fk' => $this->page_id_fk,
        ]);

        $query->andFilterWhere(['like', 'story_title', $this->story_title])
            ->andFilterWhere(['like', 'story_subtitle', $this->story_subtitle])
            ->andFilterWhere(['like', 'story_status', $this->story_status]);

        return $dataProvider;
    }
}
