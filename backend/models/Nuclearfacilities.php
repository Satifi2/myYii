<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nuclearfacilities".
 *
 * @property int $facility_id
 * @property string|null $facility_name
 * @property string|null $facility_type
 * @property string|null $location
 * @property string|null $operational_status
 * @property string|null $technical_specifications
 * @property string|null $safety_measures
 */
class Nuclearfacilities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nuclearfacilities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['technical_specifications', 'safety_measures'], 'string'],
            [['facility_name', 'location'], 'string', 'max' => 255],
            [['facility_type'], 'string', 'max' => 100],
            [['operational_status'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'facility_id' => 'Facility ID',
            'facility_name' => 'Facility Name',
            'facility_type' => 'Facility Type',
            'location' => 'Location',
            'operational_status' => 'Operational Status',
            'technical_specifications' => 'Technical Specifications',
            'safety_measures' => 'Safety Measures',
        ];
    }
}
