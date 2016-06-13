<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UbicacionDescuento */

$this->title = 'Crear ubicación descuento';
$this->params['breadcrumbs'][] = ['label' => 'Ubicación descuentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ubicacion-descuento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
