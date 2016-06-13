<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampanaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campañas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campana-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear campaña', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_campana',            
            'nombre',
            //'descripcion',
            'presupuesto_campana',
            [
             'attribute' => 'id_presupuesto',
             'value' =>  'idPresupuesto.nombre',
            ],
            'inicio',
            'fin',
            'email_ue:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
