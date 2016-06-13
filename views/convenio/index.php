<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Convenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_convenio',
            'nombre_convenio',
            [
             'attribute' => 'id_empresa',
             'value' =>  'idEmpresa.nombre_empresa'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
