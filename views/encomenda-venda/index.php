<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EncomendaVendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Encomenda Vendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encomenda-venda-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Encomenda Venda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
                ['attribute'=>'cliente_id',
                 'value'=>'cliente.nome'
        ],
            ['attribute'=>'lote_id',
                 'value'=>'lote.tipoOvo'
        ],
            'quantidade_tipo',
         

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
