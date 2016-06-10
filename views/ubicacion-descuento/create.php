<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UbicacionDescuento */

$this->title = 'Create Ubicacion Descuento';
$this->params['breadcrumbs'][] = ['label' => 'Ubicacion Descuentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ubicacion-descuento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
