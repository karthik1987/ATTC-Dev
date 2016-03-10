<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Test;

/**
 * TestSearch represents the model behind the search form about `app\models\Test`.
 */
class TestSearch extends Test
{
	
	public $trade;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TM_Test_Id'], 'integer'],
            [['TRM_Trade_Id','TM_Date', 'TM_Capacity', 'TM_Status'], 'safe'],
            [['trade'], 'safe'],
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
        $query = Test::find();
        $query->joinWith(['trade']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        $dataProvider->sort->attributes['Trade'] = [
        // The tables are the ones our relation are configured to
        // in my case they are prefixed with "tbl_"
        'asc' => ['TradeMaster.TR_Title' => SORT_ASC],
        'desc' => ['TradeMaster.TR_Title' => SORT_DESC],
		];

        $this->load($params);

        if (!($this->load($params) && $this->validate())) {
        return $dataProvider;
		}

        $query->andFilterWhere([
            
            'TM_Date' => $this->TM_Date,
        ]);

        $query->andFilterWhere(['like', 'TM_Capacity', $this->TM_Capacity])
            ->andFilterWhere(['like', 'TM_Status', $this->TM_Status])
            ->andFilterWhere(['like', 'TradeMaster.TR_Title', $this->TRM_Trade_Id]);

        return $dataProvider;
    }
}
