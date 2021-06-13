<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Candidatura */

$this->title = 'Update Candidatura: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Candidaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="candidatura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
