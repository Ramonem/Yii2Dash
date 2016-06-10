<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HistorialDescuento */

$this->title = $model->id_historial_desc;
$this->params['breadcrumbs'][] = ['label' => 'Historial Descuentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historial-descuento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_historial_desc], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_historial_desc], [
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
            'id_historial_desc',
            'id_empresa',
            'id_historial_camp',
            'id_subcat',
            'descuento',
            'imagen',
            'vigencia_inicio',
            'vigencia_fin',
            'contacto',
            'gasto',
            'creado',
        ],
    ]) ?>

</div>
