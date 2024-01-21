<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "radiationlevels".
 *
 * @property int $level_id
 * @property string|null $region
 * @property float|null $radiation_dose_rate
 * @property string|null $radiation_source
 * @property string|null $monitoring_time
 */
class Radiationlevels extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'radiationlevels';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['radiation_dose_rate'], 'number'],
            [['monitoring_time'], 'safe'],
            [['region', 'radiation_source'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'level_id' => 'Level ID',
            'region' => 'Region',
            'radiation_dose_rate' => 'Radiation Dose Rate',
            'radiation_source' => 'Radiation Source',
            'monitoring_time' => 'Monitoring Time',
        ];
    }
}
