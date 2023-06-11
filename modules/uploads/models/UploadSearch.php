<?php

namespace app\modules\uploads\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\uploads\models\Upload;

/**
 * UploadSearch represents the model behind the search form of `app\modules\uploads\models\Upload`.
 */
class UploadSearch extends Upload
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['upload_id', 'created_by', 'updated_by'], 'integer'],
            [['upload_ref', 'upload_filename', 'upload_path', 'created_at', 'updated_at'], 'safe'],
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
        $query = Upload::find();

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
            'upload_id' => $this->upload_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'upload_ref', $this->upload_ref])
            ->andFilterWhere(['like', 'upload_filename', $this->upload_filename])
            ->andFilterWhere(['like', 'upload_path', $this->upload_path]);

        return $dataProvider;
    }
}
