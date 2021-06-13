<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Armazem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="armazem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_quinta')->textInput() ?>

    <?= $form->field($model, 'tamanho')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_lotes')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
