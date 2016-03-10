<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "AdminMaster".
 *
 * @property integer $AM_KeyID
 * @property string $AM_LoginName
 * @property string $AM_Password
 * @property integer $AM_UGM_KeyID
 * @property string $AM_Flexifield1
 * @property string $AM_Flexifield2
 * @property string $AM_Flexifield3
 * @property string $AM_Flexifield4
 * @property string $AM_Flexifield5
 * @property string $AM_UserID
 * @property string $AM_TimeStamp
 * @property string $AM_ModTimeStamp
 * @property string $AM_Active
 * @property string $AM_AuthKey
 */
class AdminMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'AdminMaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AM_LoginName', 'AM_Password', 'AM_UGM_KeyID', 'AM_UserID', 'AM_Active', 'AM_AuthKey'], 'required'],
            [['AM_UGM_KeyID'], 'integer'],
            [['AM_TimeStamp', 'AM_ModTimeStamp'], 'safe'],
            [['AM_LoginName', 'AM_Password', 'AM_Flexifield1', 'AM_Flexifield2', 'AM_Flexifield3', 'AM_Flexifield4', 'AM_Flexifield5', 'AM_UserID'], 'string', 'max' => 255],
            [['AM_Active'], 'string', 'max' => 25],
            [['AM_AuthKey'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AM_KeyID' => 'Am  Key ID',
            'AM_LoginName' => 'Am  Login Name',
            'AM_Password' => 'Am  Password',
            'AM_UGM_KeyID' => 'Am  Ugm  Key ID',
            'AM_Flexifield1' => 'Am  Flexifield1',
            'AM_Flexifield2' => 'Am  Flexifield2',
            'AM_Flexifield3' => 'Am  Flexifield3',
            'AM_Flexifield4' => 'Am  Flexifield4',
            'AM_Flexifield5' => 'Am  Flexifield5',
            'AM_UserID' => 'Am  User ID',
            'AM_TimeStamp' => 'Am  Time Stamp',
            'AM_ModTimeStamp' => 'Am  Mod Time Stamp',
            'AM_Active' => 'Am  Active',
            'AM_AuthKey' => 'Am  Auth Key',
        ];
    }
}
