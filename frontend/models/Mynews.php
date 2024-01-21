<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mynews".
 *
 * @property int $incident_id
 * @property string|null $title
 * @property string|null $event_date
 * @property string|null $link
 * @property string|null $imgLink
 * @property string|null $content
 */
class Mynews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mynews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_date'], 'safe'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['link', 'imgLink'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'incident_id' => 'Incident ID',
            'title' => 'Title',
            'event_date' => 'Event Date',
            'link' => 'Link',
            'imgLink' => 'Img Link',
            'content' => 'Content',
        ];
    }
}
