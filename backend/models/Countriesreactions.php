<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "countriesreactions".
 *
 * @property int $reaction_id
 * @property string|null $country_name
 * @property string|null $reaction_date
 * @property string|null $reaction_description
 */
class Countriesreactions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'countriesreactions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reaction_date'], 'safe'],
            [['reaction_description'], 'string'],
            [['country_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reaction_id' => 'Reaction ID',
            'country_name' => 'Country Name',
            'reaction_date' => 'Reaction Date',
            'reaction_description' => 'Reaction Description',
        ];
    }
}
