<?php
/**
 *  Team: BaoSha
 *  Coding by 杜怡兴 2112847 1/12
 *  NuclearPollution frontend
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponCountry $model */

$this->title = 'Create Weapon Country';
$this->params['breadcrumbs'][] = ['label' => 'Weapon Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weapon-country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
