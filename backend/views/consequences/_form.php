<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\consequences $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="consequences-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'consequence_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
