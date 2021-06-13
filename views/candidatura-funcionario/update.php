<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CandidaturaFuncionario */

$this->title = 'Update Candidatura Funcionario: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Candidatura Funcionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="candidatura-funcionario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
