<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "healtheffects".
 *
 * @property int $effect_id
 * @property string|null $health_condition
 * @property float|null $radiation_exposure
 * @property float|null $cancer_incidence_rate
 * @property int|null $genetic_mutations
 * @property string|null $statistics
 */
class Healtheffects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'healtheffects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['radiation_exposure', 'cancer_incidence_rate'], 'number'],
            [['genetic_mutations'], 'integer'],
            [['statistics'], 'string'],
            [['health_condition'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'effect_id' => 'Effect ID',
            'health_condition' => 'Health Condition',
            'radiation_exposure' => 'Radiation Exposure',
            'cancer_incidence_rate' => 'Cancer Incidence Rate',
            'genetic_mutations' => 'Genetic Mutations',
            'statistics' => 'Statistics',
        ];
    }
}
