<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\emergencyresponse $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="emergencyresponse-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_id')->textInput() ?>

    <?= $form->field($model, 'response_plan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'response_team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resource_allocation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contact_information')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
