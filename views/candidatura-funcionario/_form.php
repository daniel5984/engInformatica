<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CandidaturaFuncionario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidatura-funcionario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isAprovado')->textInput() ?>

    <?= $form->field($model, 'candidatura_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
