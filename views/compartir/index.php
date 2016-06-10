<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CompartirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compartirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compartir-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Compartir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_descuento',
            'email:email',
            'contador',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
