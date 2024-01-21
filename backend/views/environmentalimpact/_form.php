<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\environmentalimpact $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="environmentalimpact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'impact_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'impact_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'environmental_data')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
