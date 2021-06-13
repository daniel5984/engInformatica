<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArmazemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Armazens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="armazem-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Armazem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_quinta',
            'tamanho',
            'num_lotes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
