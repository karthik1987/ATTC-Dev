<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "CourseMaster".
 *
 * @property string $CRM_Course_Id
 * @property string $CRM_Course_Code
 * @property string $CRM_Course_Trade_Category
 * @property string $CRM_Course_Title
 * @property string $CRM_Course_Level
 * @property string $CRM_Course_Gross_Fee
 * @property integer $CRM_Course_Training_Hrs
 * @property integer $CRM_Course_Test_Hrs
 * @property string $CRM_Testing_Date
 * @property string $CRM_Course_Test_Required
 * @property string $CRM_Course_Enrollment_Deadline
 * @property string $CRM_Course_Replacement_Deadline
 * @property integer $CRM_Course_Replacement_Admin_Fee_Percentage
 * @property string $CRM_Course_Withdrawal_Deadline
 * @property integer $CRM_Course_Withdrawal_Admin_Fee_Percentage
 * @property string $CRM_Course_Postponement_Deadline
 * @property integer $CRM_Course_Postponement_Admin_Fee_Percentage
 * @property string $CRM_Flexifield1
 * @property string $CRM_Flexifield2
 * @property string $CRM_Flexifield3
 * @property string $CRM_Flexifield4
 * @property string $CRM_Flexifield5
 * @property string $CRM_Flexifield6
 * @property string $CRM_UserID
 * @property string $CRM_TimeStamp
 * @property string $CRM_ModTimeStamp
 * @property string $CRM_Active
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CourseMaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CRM_Course_Trade_Category', 'CRM_Course_Title', 'CRM_Course_Level', 'CRM_Course_Gross_Fee', 'CRM_Course_Training_Hrs', 'CRM_Course_Test_Hrs', 'CRM_Testing_Date', 'CRM_Course_Test_Required', 'CRM_Course_Enrollment_Deadline', 'CRM_Course_Replacement_Deadline', 'CRM_Course_Replacement_Admin_Fee_Percentage', 'CRM_Course_Withdrawal_Deadline', 'CRM_Course_Withdrawal_Admin_Fee_Percentage', 'CRM_Course_Postponement_Deadline', 'CRM_Course_Postponement_Admin_Fee_Percentage'], 'required'],
            [['CRM_Course_Training_Hrs', 'CRM_Course_Test_Hrs', 'CRM_Course_Replacement_Admin_Fee_Percentage', 'CRM_Course_Withdrawal_Admin_Fee_Percentage',  'CRM_Course_Postponement_Admin_Fee_Percentage'], 'integer'],
            [['CRM_TimeStamp', 'CRM_ModTimeStamp'], 'safe'],
            [['CRM_Course_Trade_Category', 'CRM_Course_Title', 'CRM_Course_Level', 'CRM_Course_Gross_Fee'], 'string', 'max' => 255],
            [['CRM_Testing_Date', 'CRM_Course_Test_Required', 'CRM_UserID', 'CRM_Active'], 'string', 'max' => 25],
			 [['CRM_Course_Code'], 'safe'],
						 
			/* ['CRM_Course_Replacement_Deadline', 'compare', 'compareValue' => 'CRM_Course_Enrollment_Deadline', 'operator' => '<', 'message' => 'Course Replacement Deadline Must be greater than Course Enrollment Deadline.'],*/
		 
			 [['CRM_Course_Replacement_Deadline'], 'compare', 'compareAttribute'=>'CRM_Course_Enrollment_Deadline', 'operator'=>'>', 'skipOnEmpty'=>true],
			 
       ];
			
    }
		
	
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CRM_Course_Code' => 'Course  Code',
            'CRM_Course_Trade_Category' => 'Course  Trade  Category',
            'CRM_Course_Title' => 'Course  Title',
            'CRM_Course_Level' => 'Course  Level',
            'CRM_Course_Gross_Fee' => 'Course  Gross  Fee',
            'CRM_Course_Training_Hrs' => 'Course  Training  Hrs',
            'CRM_Course_Test_Hrs' => 'Course  Test  Hrs',
            'CRM_Testing_Date' => 'Testing  Date',
            'CRM_Course_Test_Required' => 'Course  Test  Required',
            'CRM_Course_Enrollment_Deadline' => 'Course  Enrollment  Deadline',
            'CRM_Course_Replacement_Deadline' => 'Course  Replacement  Deadline',
            'CRM_Course_Replacement_Admin_Fee_Percentage' => 'Course  Replacement  Admin  Fee  Percentage',
            'CRM_Course_Withdrawal_Deadline' => 'Course  Withdrawal  Deadline',
            'CRM_Course_Withdrawal_Admin_Fee_Percentage' => 'Course  Withdrawal  Admin  Fee  Percentage',
            'CRM_Course_Postponement_Deadline' => 'Course  Postponement  Deadline',
            'CRM_Course_Postponement_Admin_Fee_Percentage' => 'Course  Postponement  Admin  Fee  Percentage',
            'CRM_Flexifield1' => 'Flexifield1',
            'CRM_Flexifield2' => 'Flexifield2',
            'CRM_Flexifield3' => 'Flexifield3',
            'CRM_Flexifield4' => 'Flexifield4',
            'CRM_Flexifield5' => 'Flexifield5',
            'CRM_Flexifield6' => 'Flexifield6',
            'CRM_UserID' => 'User',
            'CRM_TimeStamp' => 'Created Date',
            'CRM_ModTimeStamp' => 'Updated Date',
            'CRM_Active' => 'Status',
        ];
    }
    
    /**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTrade()
	{
		return $this->hasOne(Trade::className(), ['TR_Trade_Id' => 'CRM_Course_Trade_Category']);
	}
	
	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTest()
	{
		return $this->hasOne(Test::className(), ['TM_Test_Id' => 'CRM_Testing_Date']);
	}
}
