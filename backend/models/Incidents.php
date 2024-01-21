<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "incidents".
 *
 * @property int $incident_id
 * @property string|null $incident_date
 * @property string|null $location
 * @property string|null $impact_range
 * @property string|null $incident_level
 * @property string|null $description
 * @property string|null $response_measures
 */
class Incidents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'incidents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['incident_date'], 'safe'],
            [['description', 'response_measures'], 'string'],
            [['location', 'impact_range'], 'string', 'max' => 255],
            [['incident_level'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'incident_id' => 'Incident ID',
            'incident_date' => 'Incident Date',
            'location' => 'Location',
            'impact_range' => 'Impact Range',
            'incident_level' => 'Incident Level',
            'description' => 'Description',
            'response_measures' => 'Response Measures',
        ];
    }
}
