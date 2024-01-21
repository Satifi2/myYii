<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regulations".
 *
 * @property int $regulation_id
 * @property string|null $regulation_name
 * @property string|null $publication_date
 * @property string|null $description
 * @property string|null $applicable_scope
 */
class Regulations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regulations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['publication_date'], 'safe'],
            [['description'], 'string'],
            [['regulation_name', 'applicable_scope'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'regulation_id' => 'Regulation ID',
            'regulation_name' => 'Regulation Name',
            'publication_date' => 'Publication Date',
            'description' => 'Description',
            'applicable_scope' => 'Applicable Scope',
        ];
    }
}
