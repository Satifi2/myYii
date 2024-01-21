<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "japannuclearnews".
 *
 * @property int $news_id
 * @property string|null $event_date
 * @property string|null $location
 * @property string|null $headline
 * @property string|null $news_content
 */
class Japannuclearnews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'japannuclearnews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_date'], 'safe'],
            [['news_content'], 'string'],
            [['location', 'headline'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'event_date' => 'Event Date',
            'location' => 'Location',
            'headline' => 'Headline',
            'news_content' => 'News Content',
        ];
    }
}
