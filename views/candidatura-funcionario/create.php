<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CandidaturaFuncionario */

$this->title = 'Create Candidatura Funcionario';
$this->params['breadcrumbs'][] = ['label' => 'Candidatura Funcionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidatura-funcionario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
