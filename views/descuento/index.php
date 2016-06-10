<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DescuentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Descuentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descuento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Descuento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_descuento',
            [
             'attribute' => 'id_empresa',
             'value' =>  'idEmpresa.nombre_empresa'
            ],
            [
             'attribute' => 'id_convenio',
             'value' =>  'idConvenio.nombre_convenio'
            ],
            [
             'attribute' => 'id_campana',
             'value' =>  'idCampana.nombre'
            ],
            [
             'attribute' => 'id_subcat',
             'value' =>  'idSubcat.nombre_subcat'
            ],
           
            // 'nombre',
            // 'descuento',
            // 'link',
            // 'descripcion:ntext',
            // 'imagen',
            // 'vigencia_inicio',
            // 'vigencia_fin',
            // 'contacto',
            // 'gasto',
            // 'creado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
