<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Quinta */

$this->title = 'Create Quinta';
$this->params['breadcrumbs'][] = ['label' => 'Quintas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quinta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
