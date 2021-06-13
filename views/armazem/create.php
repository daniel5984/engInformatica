<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Armazem */

$this->title = 'Create Armazem';
$this->params['breadcrumbs'][] = ['label' => 'Armazems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="armazem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
