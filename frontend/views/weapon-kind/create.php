<?php
/**
 *  Team: BaoSha
 *  Coding by 杜怡兴 2112847 1/20
 *  NuclearPollution frontend
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponKind $model */

$this->title = 'Create Weapon Kind';
$this->params['breadcrumbs'][] = ['label' => 'Weapon Kinds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weapon-kind-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
