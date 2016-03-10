<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Course;

/**
 * CourseSearch represents the model behind the search form about `app\models\Course`.
 */
class CourseSearch extends Course
{
	
	public $trade;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CRM_Course_Code', 'CRM_Course_Training_Hrs', 'CRM_Course_Test_Hrs', 'CRM_Course_Enrollment_Deadline', 'CRM_Course_Replacement_Deadline', 'CRM_Course_Replacement_Admin_Fee_Percentage', 'CRM_Course_Withdrawal_Deadline', 'CRM_Course_Withdrawal_Admin_Fee_Percentage', 'CRM_Course_Postponement_Deadline', 'CRM_Course_Postponement_Admin_Fee_Percentage'], 'integer'],
            [['CRM_Course_Trade_Category', 'CRM_Course_Title', 'CRM_Course_Level', 'CRM_Course_Gross_Fee', 'CRM_Testing_Date', 'CRM_Course_Test_Required', 'CRM_Flexifield1', 'CRM_Flexifield2', 'CRM_Flexifield3', 'CRM_Flexifield4', 'CRM_Flexifield5', 'CRM_Flexifield6', 'CRM_UserID', 'CRM_TimeStamp', 'CRM_ModTimeStamp', 'CRM_Active'], 'safe'],
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
        $query = Course::find();
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
            'CRM_Course_Code' => $this->CRM_Course_Code,
            'CRM_Course_Training_Hrs' => $this->CRM_Course_Training_Hrs,
            'CRM_Course_Test_Hrs' => $this->CRM_Course_Test_Hrs,
            'CRM_Course_Enrollment_Deadline' => $this->CRM_Course_Enrollment_Deadline,
            'CRM_Course_Replacement_Deadline' => $this->CRM_Course_Replacement_Deadline,
            'CRM_Course_Replacement_Admin_Fee_Percentage' => $this->CRM_Course_Replacement_Admin_Fee_Percentage,
            'CRM_Course_Withdrawal_Deadline' => $this->CRM_Course_Withdrawal_Deadline,
            'CRM_Course_Withdrawal_Admin_Fee_Percentage' => $this->CRM_Course_Withdrawal_Admin_Fee_Percentage,
            'CRM_Course_Postponement_Deadline' => $this->CRM_Course_Postponement_Deadline,
            'CRM_Course_Postponement_Admin_Fee_Percentage' => $this->CRM_Course_Postponement_Admin_Fee_Percentage,
            'CRM_TimeStamp' => $this->CRM_TimeStamp,
            'CRM_ModTimeStamp' => $this->CRM_ModTimeStamp,
        ]);

        $query
            ->andFilterWhere(['like', 'CRM_Course_Title', $this->CRM_Course_Title])
            ->andFilterWhere(['like', 'CRM_Course_Level', $this->CRM_Course_Level])
            ->andFilterWhere(['like', 'CRM_Course_Gross_Fee', $this->CRM_Course_Gross_Fee])
            ->andFilterWhere(['like', 'CRM_Testing_Date', $this->CRM_Testing_Date])
            ->andFilterWhere(['like', 'CRM_Course_Test_Required', $this->CRM_Course_Test_Required])
            ->andFilterWhere(['like', 'CRM_Flexifield1', $this->CRM_Flexifield1])
            ->andFilterWhere(['like', 'CRM_Flexifield2', $this->CRM_Flexifield2])
            ->andFilterWhere(['like', 'CRM_Flexifield3', $this->CRM_Flexifield3])
            ->andFilterWhere(['like', 'CRM_Flexifield4', $this->CRM_Flexifield4])
            ->andFilterWhere(['like', 'CRM_Flexifield5', $this->CRM_Flexifield5])
            ->andFilterWhere(['like', 'CRM_Flexifield6', $this->CRM_Flexifield6])
            ->andFilterWhere(['like', 'CRM_UserID', $this->CRM_UserID])
            ->andFilterWhere(['like', 'CRM_Active', $this->CRM_Active])
            ->andFilterWhere(['like', 'TradeMaster.TR_Title', $this->CRM_Course_Trade_Category]);

        return $dataProvider;
    }
}
