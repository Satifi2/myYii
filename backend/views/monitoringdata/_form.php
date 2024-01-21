<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\monitoringdata $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="monitoringdata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_id')->textInput() ?>

    <?= $form->field($model, 'monitoring_station')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monitoring_time')->textInput() ?>

    <?= $form->field($model, 'radiation_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'environmental_impact')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'weather_data')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
