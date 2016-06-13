<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Campana */

$this->title = 'Detalle';
$this->params['breadcrumbs'][] = ['label' => 'Campañas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campana-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_campana], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_campana], [
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
            'id_campana',
            'email_ue:email',
            'nombre',
            'descripcion',
            'presupuesto_campana',
            'idPresupuesto.nombre',
            'inicio',
            'fin',
        ],
    ]) ?>

</div>
