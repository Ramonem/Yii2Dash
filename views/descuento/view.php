<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Descuento */

$this->title = $model->id_descuento;
$this->params['breadcrumbs'][] = ['label' => 'Descuentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descuento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_descuento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_descuento], [
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
            'id_descuento',
            'idEmpresa.nombre_empresa',
            'idConvenio.nombre_convenio',
            'idCampana.nombre',
            'idSubcat.nombre_subcat',
            'nombre',
            'descuento',
            'link',
            'descripcion:ntext',
            'imagen',
            'vigencia_inicio',
            'vigencia_fin',
            'contacto',
            'gasto',
            'creado',
        ],
    ]) ?>

</div>
