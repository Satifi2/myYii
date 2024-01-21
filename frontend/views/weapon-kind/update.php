<?php
/**
 *  Team: BaoSha
 *  Coding by 王健行 2111065 1/16
 *  NuclearPollution frontend
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponKind $model */

$this->title = 'Update Weapon Kind: ' . $model->kind_id;
$this->params['breadcrumbs'][] = ['label' => 'Weapon Kinds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kind_id, 'url' => ['view', 'kind_id' => $model->kind_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="weapon-kind-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
