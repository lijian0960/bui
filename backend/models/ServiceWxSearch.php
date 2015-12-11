<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ServiceWx;

/**
 * ServiceWxSearch represents the model behind the search form about `common\models\ServiceWx`.
 */
class ServiceWxSearch extends ServiceWx
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'sort', 'status', 'create_time', 'update_time'], 'integer'],
            [['nickname', 'wx', 'qrcode_url', 'qrcode'], 'safe'],
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
        $query = ServiceWx::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'type' => $this->type,
            'sort' => $this->sort,
            'status' => $this->status,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'wx', $this->wx])
            ->andFilterWhere(['like', 'qrcode_url', $this->qrcode_url])
            ->andFilterWhere(['like', 'qrcode', $this->qrcode]);

        return $dataProvider;
    }
}
