<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\healtheffects $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="healtheffects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'health_condition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'radiation_exposure')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cancer_incidence_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genetic_mutations')->textInput() ?>

    <?= $form->field($model, 'statistics')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
