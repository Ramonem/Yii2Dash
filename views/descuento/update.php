<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Descuento */

$this->title = 'Actualizar descuento: ' . $model->id_descuento;
$this->params['breadcrumbs'][] = ['label' => 'Descuentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_descuento, 'url' => ['view', 'id' => $model->id_descuento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="descuento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
