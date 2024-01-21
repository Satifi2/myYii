<?php
/**
 *  Team: BaoSha
 *  Coding by 杜怡兴 2112847 1/11
 *  NuclearPollution backend
 */
namespace frontend\models;

/**
 * This is the ActiveQuery class for [[WeaponCountry]].
 *
 * @see WeaponCountry
 */
class WeaponCountryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return WeaponCountry[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return WeaponCountry|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
