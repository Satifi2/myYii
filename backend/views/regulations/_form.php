<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\regulations $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="regulations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'regulation_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publication_date')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'applicable_scope')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
