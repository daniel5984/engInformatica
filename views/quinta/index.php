<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'A minha Quinta';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quinta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Quinta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'area',
            'morada',
            'num_funcionarios',
            //'telefone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
