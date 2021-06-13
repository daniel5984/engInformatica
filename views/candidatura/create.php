<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Candidatura */

$this->title = 'Create Candidatura';
$this->params['breadcrumbs'][] = ['label' => 'Candidaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidatura-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
