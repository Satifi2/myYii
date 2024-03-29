<?php
/**
 *  Team: BaoSha
 *  Coding by 杜怡兴 2112847 1/16
 *  NuclearPollution frontend
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponCountry $model */

$this->title = $model->countryid;
$this->params['breadcrumbs'][] = ['label' => 'Weapon Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="weapon-country-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'countryid' => $model->countryid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'countryid' => $model->countryid], [
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
            'countryid',
            'countryname',
        ],
    ]) ?>

</div>
