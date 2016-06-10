<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HistorialDescuentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Historial Descuentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historial-descuento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Historial Descuento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_historial_desc',
            'id_empresa',
            'id_historial_camp',
            'id_subcat',
            'descuento',
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
