<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CandidaturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Candidaturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidatura-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Candidatura', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'classifications',
            'jobs',
            'specialization',
            'languages',
            ['attribute'=>'candidato_id',
            'value'=>'candidato.nome'
        ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
