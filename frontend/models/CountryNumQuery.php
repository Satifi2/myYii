<?php

/**
 *  Team: BaoSha
 *  Coding by 李星谊 2113601  1/18
 *  NuclearPollution frontend
 */

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[CountryNum]].
 *
 * @see CountryNum
 */
class CountryNumQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CountryNum[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CountryNum|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
