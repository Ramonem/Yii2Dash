<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EnlaceCat */

$this->title = 'Detalle';
$this->params['breadcrumbs'][] = ['label' => 'Enlace categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enlace-cat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id_subcat' => $model->id_subcat, 'id_cat' => $model->id_cat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id_subcat' => $model->id_subcat, 'id_cat' => $model->id_cat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idCat.nombre_cat',
            'idSubcat.nombre_subcat',
        ],
    ]) ?>

</div>
