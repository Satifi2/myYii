<?php

/**
 *  Team: BaoSha
 *  Coding by 李星谊 2113601  1/14
 *  NuclearPollution frontend
 */

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[RuNews]].
 *
 * @see RuNews
 */
class RuNewsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return RuNews[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return RuNews|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
