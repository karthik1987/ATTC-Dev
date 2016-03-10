<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "UserGroupMaster".
 *
 * @property integer $UGM_KeyID
 * @property string $UGM_Type
 * @property string $UGM_Flexifield1
 * @property string $UGM_Flexifield2
 * @property string $UGM_Flexifield3
 * @property string $UGM_Flexifield4
 * @property string $UGM_Flexifield5
 * @property string $UGM_Flexifield6
 * @property string $UGM_UserID
 * @property string $UGM_TimeStamp
 * @property string $UGM_ModTimeStamp
 * @property string $UGM_Active
 */
class UserGroupMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'UserGroupMaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UGM_Type', 'UGM_Flexifield1', 'UGM_Flexifield2', 'UGM_Flexifield3', 'UGM_Flexifield4', 'UGM_Flexifield5', 'UGM_Flexifield6', 'UGM_UserID', 'UGM_Active'], 'required'],
            [['UGM_TimeStamp', 'UGM_ModTimeStamp'], 'safe'],
            [['UGM_Type', 'UGM_Flexifield1', 'UGM_Flexifield2', 'UGM_Flexifield3', 'UGM_Flexifield4', 'UGM_Flexifield5', 'UGM_Flexifield6'], 'string', 'max' => 255],
            [['UGM_UserID', 'UGM_Active'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UGM_KeyID' => 'Ugm  Key ID',
            'UGM_Type' => 'Ugm  Type',
            'UGM_Flexifield1' => 'Ugm  Flexifield1',
            'UGM_Flexifield2' => 'Ugm  Flexifield2',
            'UGM_Flexifield3' => 'Ugm  Flexifield3',
            'UGM_Flexifield4' => 'Ugm  Flexifield4',
            'UGM_Flexifield5' => 'Ugm  Flexifield5',
            'UGM_Flexifield6' => 'Ugm  Flexifield6',
            'UGM_UserID' => 'Ugm  User ID',
            'UGM_TimeStamp' => 'Ugm  Time Stamp',
            'UGM_ModTimeStamp' => 'Ugm  Mod Time Stamp',
            'UGM_Active' => 'Ugm  Active',
        ];
    }
}
