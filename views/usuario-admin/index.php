<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioAdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuario Admins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Usuario Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email_admin:email',
            'password',
            'rol',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
