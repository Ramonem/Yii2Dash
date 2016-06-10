<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioEmpresaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuario Empresas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-empresa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Usuario Empresa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email_ue:email',
            'id_empresa',
            'nombre',
            //'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
