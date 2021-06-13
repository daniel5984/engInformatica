<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Candidatura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidatura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'classifications')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jobs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specialization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'languages')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'candidato_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
