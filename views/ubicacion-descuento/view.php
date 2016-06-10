<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UbicacionDescuento */

$this->title = $model->id_ubicacion;
$this->params['breadcrumbs'][] = ['label' => 'Ubicacion Descuentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ubicacion-descuento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_ubicacion' => $model->id_ubicacion, 'id_descuento' => $model->id_descuento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_ubicacion' => $model->id_ubicacion, 'id_descuento' => $model->id_descuento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_ubicacion',
            'id_descuento',
        ],
    ]) ?>

</div>
