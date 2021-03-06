<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UbicacionDescuentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ubicación descuentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ubicacion-descuento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear ubicación descuento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
             [
             'attribute' => 'id_descuento',
             'value' =>  'idDescuento.nombre'
            ],
            [
             'attribute' => 'id_ubicacion',
             'value' =>  'idUbicacion.direccion'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
