<?php
/**
 *  Team: BaoSha
 *  Coding by 王健行 2111065 1/16
 *  NuclearPollution frontend
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponKind $model */

$this->title = $model->kind_id;
$this->params['breadcrumbs'][] = ['label' => 'Weapon Kinds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="weapon-kind-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kind_id' => $model->kind_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kind_id' => $model->kind_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kind_id',
            'kindname',
            'E_kindname',
        ],
    ]) ?>

</div>
