<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HistorialRecordar */

$this->title = 'Create Historial Recordar';
$this->params['breadcrumbs'][] = ['label' => 'Historial Recordars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historial-recordar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
