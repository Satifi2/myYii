<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\nuclearfacilities $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="nuclearfacilities-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'facility_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facility_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operational_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'technical_specifications')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'safety_measures')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
