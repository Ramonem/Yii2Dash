<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UbicacionDescuento */

$this->title = 'Actualizar ubicación descuento: ' . $model->id_ubicacion;
$this->params['breadcrumbs'][] = ['label' => 'Ubicación descuentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ubicacion, 'url' => ['view', 'id_ubicacion' => $model->id_ubicacion, 'id_descuento' => $model->id_descuento]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="ubicacion-descuento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
