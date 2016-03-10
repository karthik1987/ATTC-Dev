<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "BiodataMaster".
 *
 * @property integer $BD_KeyID
 * @property string $BD_CM_Client_Code
 * @property string $BD_Bio_Name
 * @property string $BD_Bio_DOB
 * @property string $BD_Bio_Citizenship
 * @property integer $BD_Bio_NRIC_FIN
 * @property string $BD_Bio_NRIC_FIN_Photo
 * @property integer $BD_Bio_MY_NRIC
 * @property string $BD_Bio_MY_NRIC_Photo
 * @property string $BD_Bio_Passport
 * @property string $BD_Bio_Passport_Photo
 * @property integer $BD_Bio_WP_SP_EP
 * @property string $BD_Bio_WP_SP_EP_Exp
 * @property string $BD_Bio_WP_SP_EP_Photo
 * @property integer $BD_Bio_CoreTrade_Reg
 * @property string $BD_Bio_CoreTrade_Reg_Photo
 * @property integer $BD_Bio_MultiSkill_Reg
 * @property string $BD_Bio_MultiSkill_Reg_Photo
 * @property string $BD_Bio_MOM_ Details_Photo
 * @property string $BD_Bio_BCA_Ack_Notice_Photo
 * @property string $BD_Flexifield1
 * @property string $BD_Flexifield2
 * @property string $BD_Flexifield3
 * @property string $BD_Flexifield4
 * @property string $BD_Flexifield5
 * @property string $BD_Flexifield6
 * @property string $BD_UserID
 * @property string $BD_TimeStamp
 * @property string $Bd_ModTimeStamp
 * @property string $BD_Active
 */
class BiodataMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'BiodataMaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['BD_CM_Client_Code', 'BD_Bio_Name', 'BD_Bio_DOB', 'BD_Bio_Citizenship', 'BD_Bio_NRIC_FIN', 'BD_Bio_NRIC_FIN_Photo', 'BD_Bio_MY_NRIC', 'BD_Bio_MY_NRIC_Photo', 'BD_Bio_Passport', 'BD_Bio_Passport_Photo', 'BD_Bio_WP_SP_EP', 'BD_Bio_WP_SP_EP_Exp', 'BD_Bio_WP_SP_EP_Photo', 'BD_Bio_CoreTrade_Reg', 'BD_Bio_CoreTrade_Reg_Photo', 'BD_Bio_MultiSkill_Reg', 'BD_Bio_MultiSkill_Reg_Photo', 'BD_Bio_MOM_ Details_Photo', 'BD_Bio_BCA_Ack_Notice_Photo', 'BD_Flexifield1', 'BD_Flexifield2', 'BD_Flexifield3', 'BD_Flexifield4', 'BD_Flexifield5', 'BD_Flexifield6', 'BD_UserID', 'BD_Active'], 'required'],
            [['BD_Bio_NRIC_FIN', 'BD_Bio_MY_NRIC', 'BD_Bio_WP_SP_EP', 'BD_Bio_CoreTrade_Reg', 'BD_Bio_MultiSkill_Reg'], 'integer'],
            [['BD_TimeStamp', 'Bd_ModTimeStamp'], 'safe'],
            [['BD_CM_Client_Code', 'BD_Bio_Name', 'BD_Bio_DOB', 'BD_Bio_Citizenship', 'BD_Bio_NRIC_FIN_Photo', 'BD_Bio_MY_NRIC_Photo', 'BD_Bio_Passport', 'BD_Bio_Passport_Photo', 'BD_Bio_WP_SP_EP_Exp', 'BD_Bio_WP_SP_EP_Photo', 'BD_Bio_CoreTrade_Reg_Photo', 'BD_Bio_MultiSkill_Reg_Photo', 'BD_Bio_MOM_ Details_Photo', 'BD_Bio_BCA_Ack_Notice_Photo', 'BD_Flexifield1', 'BD_Flexifield2', 'BD_Flexifield3', 'BD_Flexifield4', 'BD_Flexifield5', 'BD_Flexifield6'], 'string', 'max' => 255],
            [['BD_UserID', 'BD_Active'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'BD_KeyID' => 'Bd  Key ID',
            'BD_CM_Client_Code' => 'Bd  Cm  Client  Code',
            'BD_Bio_Name' => 'Bd  Bio  Name',
            'BD_Bio_DOB' => 'Bd  Bio  Dob',
            'BD_Bio_Citizenship' => 'Bd  Bio  Citizenship',
            'BD_Bio_NRIC_FIN' => 'Bd  Bio  Nric  Fin',
            'BD_Bio_NRIC_FIN_Photo' => 'Bd  Bio  Nric  Fin  Photo',
            'BD_Bio_MY_NRIC' => 'Bd  Bio  My  Nric',
            'BD_Bio_MY_NRIC_Photo' => 'Bd  Bio  My  Nric  Photo',
            'BD_Bio_Passport' => 'Bd  Bio  Passport',
            'BD_Bio_Passport_Photo' => 'Bd  Bio  Passport  Photo',
            'BD_Bio_WP_SP_EP' => 'Bd  Bio  Wp  Sp  Ep',
            'BD_Bio_WP_SP_EP_Exp' => 'Bd  Bio  Wp  Sp  Ep  Exp',
            'BD_Bio_WP_SP_EP_Photo' => 'Bd  Bio  Wp  Sp  Ep  Photo',
            'BD_Bio_CoreTrade_Reg' => 'Bd  Bio  Core Trade  Reg',
            'BD_Bio_CoreTrade_Reg_Photo' => 'Bd  Bio  Core Trade  Reg  Photo',
            'BD_Bio_MultiSkill_Reg' => 'Bd  Bio  Multi Skill  Reg',
            'BD_Bio_MultiSkill_Reg_Photo' => 'Bd  Bio  Multi Skill  Reg  Photo',
            'BD_Bio_MOM_ Details_Photo' => 'Bd  Bio  Mom   Details  Photo',
            'BD_Bio_BCA_Ack_Notice_Photo' => 'Bd  Bio  Bca  Ack  Notice  Photo',
            'BD_Flexifield1' => 'Bd  Flexifield1',
            'BD_Flexifield2' => 'Bd  Flexifield2',
            'BD_Flexifield3' => 'Bd  Flexifield3',
            'BD_Flexifield4' => 'Bd  Flexifield4',
            'BD_Flexifield5' => 'Bd  Flexifield5',
            'BD_Flexifield6' => 'Bd  Flexifield6',
            'BD_UserID' => 'Bd  User ID',
            'BD_TimeStamp' => 'Bd  Time Stamp',
            'Bd_ModTimeStamp' => 'Bd  Mod Time Stamp',
            'BD_Active' => 'Bd  Active',
        ];
    }
}
