<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\incidents $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="incidents-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'incident_date')->textInput() ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'impact_range')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'incident_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'response_measures')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
