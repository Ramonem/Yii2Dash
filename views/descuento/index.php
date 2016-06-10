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
            'id_empresa',
            'id_convenio',
            'id_campana',
            'id_subcat',
            // 'descuento',
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
