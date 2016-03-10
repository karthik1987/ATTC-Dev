<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TradeMaster".
 *
 * @property integer $TR_Trade_Id
 * @property string $TR_Title
 * @property string $TR_Active
 */
class Trade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TradeMaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TR_Title'], 'string', 'max' => 250],
            [['TR_Active'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TR_Trade_Id' => 'Tr  Trade  ID',
            'TR_Title' => 'Tr  Title',
            'TR_Active' => 'Tr  Active',
        ];
    }
}
