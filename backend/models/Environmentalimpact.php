<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "environmentalimpact".
 *
 * @property int $impact_id
 * @property string|null $impact_type
 * @property string|null $location
 * @property string|null $impact_description
 * @property string|null $environmental_data
 */
class Environmentalimpact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'environmentalimpact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['impact_description', 'environmental_data'], 'string'],
            [['impact_type'], 'string', 'max' => 50],
            [['location'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'impact_id' => 'Impact ID',
            'impact_type' => 'Impact Type',
            'location' => 'Location',
            'impact_description' => 'Impact Description',
            'environmental_data' => 'Environmental Data',
        ];
    }
}
