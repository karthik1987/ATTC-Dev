<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ErrorMaster".
 *
 * @property integer $EM_KeyID
 * @property string $EM_Type
 * @property string $EM_Description
 * @property string $EM_Flexifield1
 * @property string $EM_Flexifield2
 * @property string $EM_Flexifield3
 * @property string $EM_Flexifield4
 * @property string $EM_Flexifield5
 * @property string $EM_Flexifield6
 * @property string $EM_UserID
 * @property string $EM_TimeStamp
 * @property string $EM_ModTimeStamp
 * @property string $EM_Active
 */
class ErrorMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ErrorMaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EM_Type', 'EM_Description', 'EM_Flexifield1', 'EM_Flexifield2', 'EM_Flexifield3', 'EM_Flexifield4', 'EM_Flexifield5', 'EM_Flexifield6', 'EM_UserID', 'EM_Active'], 'required'],
            [['EM_TimeStamp', 'EM_ModTimeStamp'], 'safe'],
            [['EM_Type', 'EM_Description', 'EM_Flexifield1', 'EM_Flexifield2', 'EM_Flexifield3', 'EM_Flexifield4', 'EM_Flexifield5', 'EM_Flexifield6'], 'string', 'max' => 255],
            [['EM_UserID', 'EM_Active'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EM_KeyID' => 'Em  Key ID',
            'EM_Type' => 'Em  Type',
            'EM_Description' => 'Em  Description',
            'EM_Flexifield1' => 'Em  Flexifield1',
            'EM_Flexifield2' => 'Em  Flexifield2',
            'EM_Flexifield3' => 'Em  Flexifield3',
            'EM_Flexifield4' => 'Em  Flexifield4',
            'EM_Flexifield5' => 'Em  Flexifield5',
            'EM_Flexifield6' => 'Em  Flexifield6',
            'EM_UserID' => 'Em  User ID',
            'EM_TimeStamp' => 'Em  Time Stamp',
            'EM_ModTimeStamp' => 'Em  Mod Time Stamp',
            'EM_Active' => 'Em  Active',
        ];
    }
}
