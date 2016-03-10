<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "CourseMaster".
 *
 * @property integer $CRM_Course_Id
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
class Calendar extends \yii\db\ActiveRecord
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
            [['CRM_Course_Trade_Category', 'CRM_Course_Title', 'CRM_Course_Level', 'CRM_Course_Gross_Fee', 'CRM_Course_Training_Hrs', 'CRM_Course_Test_Hrs', 'CRM_Testing_Date', 'CRM_Course_Test_Required', 'CRM_Course_Enrollment_Deadline', 'CRM_Course_Replacement_Deadline', 'CRM_Course_Replacement_Admin_Fee_Percentage', 'CRM_Course_Withdrawal_Deadline', 'CRM_Course_Withdrawal_Admin_Fee_Percentage', 'CRM_Course_Postponement_Deadline', 'CRM_Course_Postponement_Admin_Fee_Percentage', 'CRM_UserID'], 'required'],
            [['CRM_Course_Training_Hrs', 'CRM_Course_Test_Hrs', 'CRM_Course_Replacement_Admin_Fee_Percentage', 'CRM_Course_Withdrawal_Admin_Fee_Percentage', 'CRM_Course_Postponement_Admin_Fee_Percentage'], 'integer'],
            [['CRM_TimeStamp', 'CRM_ModTimeStamp'], 'safe'],
            [['CRM_Course_Code'], 'string', 'max' => 100],
            [['CRM_Course_Trade_Category', 'CRM_Course_Title', 'CRM_Course_Level', 'CRM_Course_Gross_Fee', 'CRM_Flexifield1', 'CRM_Flexifield2', 'CRM_Flexifield3', 'CRM_Flexifield4', 'CRM_Flexifield5', 'CRM_Flexifield6'], 'string', 'max' => 255],
            [['CRM_Testing_Date', 'CRM_Course_Test_Required', 'CRM_Course_Enrollment_Deadline', 'CRM_Course_Replacement_Deadline', 'CRM_Course_Withdrawal_Deadline', 'CRM_Course_Postponement_Deadline', 'CRM_UserID', 'CRM_Active'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CRM_Course_Id' => 'Crm  Course  ID',
            'CRM_Course_Code' => 'Crm  Course  Code',
            'CRM_Course_Trade_Category' => 'Crm  Course  Trade  Category',
            'CRM_Course_Title' => 'Crm  Course  Title',
            'CRM_Course_Level' => 'Crm  Course  Level',
            'CRM_Course_Gross_Fee' => 'Crm  Course  Gross  Fee',
            'CRM_Course_Training_Hrs' => 'Crm  Course  Training  Hrs',
            'CRM_Course_Test_Hrs' => 'Crm  Course  Test  Hrs',
            'CRM_Testing_Date' => 'Crm  Testing  Date',
            'CRM_Course_Test_Required' => 'Crm  Course  Test  Required',
            'CRM_Course_Enrollment_Deadline' => 'Crm  Course  Enrollment  Deadline',
            'CRM_Course_Replacement_Deadline' => 'Crm  Course  Replacement  Deadline',
            'CRM_Course_Replacement_Admin_Fee_Percentage' => 'Crm  Course  Replacement  Admin  Fee  Percentage',
            'CRM_Course_Withdrawal_Deadline' => 'Crm  Course  Withdrawal  Deadline',
            'CRM_Course_Withdrawal_Admin_Fee_Percentage' => 'Crm  Course  Withdrawal  Admin  Fee  Percentage',
            'CRM_Course_Postponement_Deadline' => 'Crm  Course  Postponement  Deadline',
            'CRM_Course_Postponement_Admin_Fee_Percentage' => 'Crm  Course  Postponement  Admin  Fee  Percentage',
            'CRM_Flexifield1' => 'Crm  Flexifield1',
            'CRM_Flexifield2' => 'Crm  Flexifield2',
            'CRM_Flexifield3' => 'Crm  Flexifield3',
            'CRM_Flexifield4' => 'Crm  Flexifield4',
            'CRM_Flexifield5' => 'Crm  Flexifield5',
            'CRM_Flexifield6' => 'Crm  Flexifield6',
            'CRM_UserID' => 'Crm  User ID',
            'CRM_TimeStamp' => 'Crm  Time Stamp',
            'CRM_ModTimeStamp' => 'Crm  Mod Time Stamp',
            'CRM_Active' => 'Crm  Active',
        ];
    }
}
