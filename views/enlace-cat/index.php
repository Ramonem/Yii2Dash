<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EnlaceCatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Enlace Cats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enlace-cat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Enlace Cat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_subcat',
            'id_cat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
