<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SaveGustoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Save Gustos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="save-gusto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Save Gusto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email:email',
            'id_cat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
