<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "monitoringdata".
 *
 * @property int $data_id
 * @property int|null $event_id
 * @property string|null $monitoring_station
 * @property string|null $monitoring_time
 * @property float|null $radiation_level
 * @property string|null $environmental_impact
 * @property string|null $weather_data
 */
class Monitoringdata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'monitoringdata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_id'], 'integer'],
            [['monitoring_time'], 'safe'],
            [['radiation_level'], 'number'],
            [['environmental_impact', 'weather_data'], 'string'],
            [['monitoring_station'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'data_id' => 'Data ID',
            'event_id' => 'Event ID',
            'monitoring_station' => 'Monitoring Station',
            'monitoring_time' => 'Monitoring Time',
            'radiation_level' => 'Radiation Level',
            'environmental_impact' => 'Environmental Impact',
            'weather_data' => 'Weather Data',
        ];
    }
}
