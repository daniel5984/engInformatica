<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EncomendaVenda */

$this->title = 'Create Encomenda Venda';
$this->params['breadcrumbs'][] = ['label' => 'Encomenda Vendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encomenda-venda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
