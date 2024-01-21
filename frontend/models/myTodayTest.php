<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country_num".
 *
 * @property string $country_name
 * @property int $cid
 * @property int $num
 *
 * @property WeaponsCompany[] $weaponsCompanies
 */
class myTodayTest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country_num';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_name'], 'required'],
            [['num'], 'integer'],
            [['country_name'], 'string', 'max' => 100],
            [['country_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country_name' => 'Country Name',
            'cid' => 'Cid',
            'num' => 'Num',
        ];
    }

    /**
     * Gets query for [[WeaponsCompanies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWeaponsCompanies()
    {
        return $this->hasMany(WeaponsCompany::class, ['cid' => 'cid']);
    }
}
