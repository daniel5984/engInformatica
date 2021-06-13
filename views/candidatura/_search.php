<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CandidaturaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidatura-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'classifications') ?>

    <?= $form->field($model, 'jobs') ?>

    <?= $form->field($model, 'specialization') ?>

    <?= $form->field($model, 'languages') ?>

    <?php // echo $form->field($model, 'candidato_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
