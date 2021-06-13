<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EncomendaVenda */

$this->title = 'Update Encomenda Venda: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Encomenda Vendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="encomenda-venda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
