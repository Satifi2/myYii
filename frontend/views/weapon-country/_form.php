<?php
/**
 *  Team: BaoSha
 *  Coding by 杜怡兴 2112847 1/13
 *  NuclearPollution frontend
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponCountry $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="weapon-country-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'countryid')->textInput() ?>

    <?= $form->field($model, 'countryname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
