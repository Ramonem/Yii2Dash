<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampanaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campanas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campana-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Campana', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_campana',
            'email_ue:email',
            'nombre',
            'descripcion',
            'presupuesto_campana',
            // 'id_presupuesto',
            // 'inicio',
            // 'fin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
