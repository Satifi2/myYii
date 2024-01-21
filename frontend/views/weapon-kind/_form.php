<?php
/**
 *  Team: BaoSha
 *  Coding by 杜怡兴 2112847 1/18
 *  NuclearPollution frontend
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponKind $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="weapon-kind-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kind_id')->textInput() ?>

    <?= $form->field($model, 'kindname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'E_kindname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
