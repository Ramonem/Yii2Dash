<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HistorialRating */

$this->title = 'Update Historial Rating: ' . $model->id_descuento;
$this->params['breadcrumbs'][] = ['label' => 'Historial Ratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_descuento, 'url' => ['view', 'id_descuento' => $model->id_descuento, 'email' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="historial-rating-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
