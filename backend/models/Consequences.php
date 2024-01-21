<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consequences".
 *
 * @property int $consequence_id
 * @property string|null $consequence_type
 * @property string|null $description
 */
class Consequences extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consequences';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['consequence_type'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'consequence_id' => 'Consequence ID',
            'consequence_type' => 'Consequence Type',
            'description' => 'Description',
        ];
    }
}
