<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ClientMaster".
 *
 * @property integer $CM_Client_Code
 * @property string $CM_Client_Type
 * @property string $CM_Indv_Name
 * @property string $CM_Indv_DOB
 * @property string $CM_Indv_Citizenship
 * @property integer $CM_Indv_NRIC_FIN
 * @property string $CM_Indv_Passport
 * @property integer $CM_Indv_WP_SP_EP
 * @property string $CM_Indv_Email
 * @property integer $CM_Indv_Mobile
 * @property integer $CM_Co_BRN
 * @property string $CM_Co_Name
 * @property string $CM_Co_URL
 * @property string $CM_Co_General_Email
 * @property integer $CM_Co_General_Contact
 * @property integer $CM_Co_Fax
 * @property string $CM_Co_Rep_Name
 * @property string $CM_Co_Rep_Designation
 * @property string $CM_Co_Rep_Email
 * @property integer $CM_Co_Rep_Contact
 * @property integer $CM_Co_Rep_Contact_Ext
 * @property string $CM_Address_Line1
 * @property string $CM_Address_Line2
 * @property integer $CM_Address_Postal
 * @property string $CM_Password_Encrypted
 * @property string $CM_Flexifield1
 * @property string $CM_Flexifield2
 * @property string $CM_Flexifield3
 * @property string $CM_Flexifield4
 * @property string $CM_Flexifield5
 * @property string $CM_Flexifield6
 * @property string $CM_UserID
 * @property string $CM_TimeStamp
 * @property string $CM_ModTimeStamp
 * @property string $CM_Active
 * @property string $CM_AuthKey
 */
class ClientMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ClientMaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['CM_Client_Type', 'CM_Indv_Name', 'CM_Indv_DOB', 'CM_Indv_Citizenship', 'CM_Indv_NRIC_FIN', 'CM_Indv_Passport', 'CM_Indv_WP_SP_EP', 'CM_Indv_Email', 'CM_Indv_Mobile', 'CM_Co_BRN', 'CM_Co_Name', 'CM_Co_URL', 'CM_Co_General_Email', 'CM_Co_General_Contact', 'CM_Co_Fax', 'CM_Co_Rep_Name', 'CM_Co_Rep_Designation', 'CM_Co_Rep_Email', 'CM_Co_Rep_Contact', 'CM_Co_Rep_Contact_Ext', 'CM_Address_Line1', 'CM_Address_Line2', 'CM_Address_Postal', 'CM_Password_Encrypted', 'CM_UserID', 'CM_Active', 'CM_AuthKey'], 'required'],
            [['CM_Indv_NRIC_FIN', 'CM_Indv_WP_SP_EP', 'CM_Indv_Mobile', 'CM_Co_BRN', 'CM_Co_General_Contact', 'CM_Co_Fax', 'CM_Co_Rep_Contact', 'CM_Co_Rep_Contact_Ext', 'CM_Address_Postal'], 'integer'],
            [['CM_TimeStamp', 'CM_ModTimeStamp'], 'safe'],
            [['CM_Client_Type', 'CM_Indv_Name', 'CM_Indv_DOB', 'CM_Indv_Citizenship', 'CM_Indv_Passport', 'CM_Indv_Email', 'CM_Co_Name', 'CM_Co_URL', 'CM_Co_General_Email', 'CM_Co_Rep_Name', 'CM_Co_Rep_Designation', 'CM_Co_Rep_Email', 'CM_Address_Line1', 'CM_Address_Line2', 'CM_Flexifield1', 'CM_Flexifield2', 'CM_Flexifield3', 'CM_Flexifield4', 'CM_Flexifield5', 'CM_Flexifield6'], 'string', 'max' => 255],
            [['CM_Password_Encrypted'], 'string', 'max' => 100],
            [['CM_UserID', 'CM_AuthKey'], 'string', 'max' => 25],
            [['CM_Active'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CM_Client_Code' => 'Cm  Client  Code',
            'CM_Client_Type' => 'Cm  Client  Type',
            'CM_Indv_Name' => 'Name',
            'CM_Indv_DOB' => 'DOB',
            'CM_Indv_Citizenship' => 'Citizenship',
            'CM_Indv_NRIC_FIN' => 'NRIC FIN',
            'CM_Indv_Passport' => 'Passport',
            'CM_Indv_WP_SP_EP' => 'WP SP EP',
            'CM_Indv_Email' => 'Email',
            'CM_Indv_Mobile' => 'Mobile',
            'CM_Co_BRN' => 'Company BRN',
            'CM_Co_Name' => 'Company Name',
            'CM_Co_URL' => 'Company URL',
            'CM_Co_General_Email' => 'Company General  Email',
            'CM_Co_General_Contact' => 'Company  General  Contact',
            'CM_Co_Fax' => 'Company Fax',
            'CM_Co_Rep_Name' => 'Company  Rep  Name',
            'CM_Co_Rep_Designation' => 'Company  Rep  Designation',
            'CM_Co_Rep_Email' => 'Company  Rep  Email',
            'CM_Co_Rep_Contact' => 'Company  Rep  Contact',
            'CM_Co_Rep_Contact_Ext' => 'Company  Rep  Contact  Ext',
            'CM_Address_Line1' => 'Address  Line1',
            'CM_Address_Line2' => 'Address  Line2',
            'CM_Address_Postal' => 'Address  Postal',
            'CM_Password_Encrypted' => 'Cm  Password  Encrypted',
            'CM_Flexifield1' => 'Cm  Flexifield1',
            'CM_Flexifield2' => 'Cm  Flexifield2',
            'CM_Flexifield3' => 'Cm  Flexifield3',
            'CM_Flexifield4' => 'Cm  Flexifield4',
            'CM_Flexifield5' => 'Cm  Flexifield5',
            'CM_Flexifield6' => 'Cm  Flexifield6',
            'CM_UserID' => 'Cm  User ID',
            'CM_TimeStamp' => 'Cm  Time Stamp',
            'CM_ModTimeStamp' => 'Cm  Mod Time Stamp',
            'CM_Active' => 'Cm  Active',
            'CM_AuthKey' => 'Cm  Auth Key',
        ];
    }
}
