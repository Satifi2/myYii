<?php
/**
 *  Team: BaoSha
 *  Coding by 杜怡兴 2112847 1/9
 *  NuclearPollution frontend
 */
namespace frontend\models;

/**
 * This is the ActiveQuery class for [[WeaponKind]].
 *
 * @see WeaponKind
 */
class WeaponKindQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return WeaponKind[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return WeaponKind|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
