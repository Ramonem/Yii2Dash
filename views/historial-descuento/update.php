<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HistorialDescuento */

$this->title = 'Update Historial Descuento: ' . $model->id_historial_desc;
$this->params['breadcrumbs'][] = ['label' => 'Historial Descuentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_historial_desc, 'url' => ['view', 'id' => $model->id_historial_desc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="historial-descuento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
