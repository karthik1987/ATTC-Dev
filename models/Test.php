<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TestMaster".
 *
 * @property integer $TM_Test_Id
 * @property integer $TRM_Trade_Id
 * @property string $TM_Date
 * @property string $TM_Capacity
 * @property string $TM_Status
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TestMaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TM_Capacity'], 'integer'],
            [['TRM_Trade_Id','TM_Date','TM_Capacity'], 'required'],
            [['TM_Capacity'], 'string', 'max' => 100],
            [['TM_Status'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TM_Test_Id' => 'Test  ID',
            'TRM_Trade_Id' => 'Trade',
            'TM_Date' => 'Test Date',
            'TM_Capacity' => 'Test Capacity',
            'TM_Status' => 'Status',
        ];
    }
    
    /**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTrade()
	{
		return $this->hasOne(Trade::className(), ['TR_Trade_Id' => 'TRM_Trade_Id']);
	}
}
