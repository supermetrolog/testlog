<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;


/**
 * This is the model class for table "log".
 *
 * @property int $id
 * @property string $ts
 * @property int $type
 * @property string $message
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ts'], 'safe'],
            [['type', 'message'], 'required'],
            [['type'], 'integer', 'max' => 10, 'min' => 1],
            [['message'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ts' => 'Ts',
            'type' => 'Type',
            'message' => 'Message',
        ];
    }

    public static function getTypeListForSelect()
    {
    //    $fuck=  ArrayHelper::map(self::find()->orderBy(['type' => SORT_ASC])->asArray()->all(), 'type', 'type');
        
       var_dump($fuck);
       $typeList = [];
       for ($i=1; $i <= 10; $i++) { 
           $typeList[$i] = (string)$i;
       }
       return $typeList;
    }
}
