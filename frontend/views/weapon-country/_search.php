<?php
/**
 *  Team: BaoSha
 *  Coding by 杜怡兴 2112847 1/13
 *  NuclearPollution frontend
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponCountrySearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="weapon-country-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'countryid') ?>

    <?= $form->field($model, 'countryname') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
