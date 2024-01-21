<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "radiantdata".
 *
 * @property int $incident_id
 * @property string|null $location
 * @property string|null $date
 * @property float|null $number
 */
class Radiantdata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'radiantdata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['number'], 'number'],
            [['location'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'incident_id' => 'Incident ID',
            'location' => 'Location',
            'date' => 'Date',
            'number' => 'Number',
        ];
    }
}
