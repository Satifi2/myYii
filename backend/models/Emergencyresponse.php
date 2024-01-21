<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emergencyresponse".
 *
 * @property int $response_id
 * @property int|null $event_id
 * @property string|null $response_plan
 * @property string|null $response_team
 * @property string|null $resource_allocation
 * @property string|null $contact_information
 */
class Emergencyresponse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emergencyresponse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_id'], 'integer'],
            [['response_plan', 'resource_allocation', 'contact_information'], 'string'],
            [['response_team'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'response_id' => 'Response ID',
            'event_id' => 'Event ID',
            'response_plan' => 'Response Plan',
            'response_team' => 'Response Team',
            'resource_allocation' => 'Resource Allocation',
            'contact_information' => 'Contact Information',
        ];
    }
}
