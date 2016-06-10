<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EnlaceCat */

$this->title = $model->id_subcat;
$this->params['breadcrumbs'][] = ['label' => 'Enlace Cats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enlace-cat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_subcat' => $model->id_subcat, 'id_cat' => $model->id_cat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_subcat' => $model->id_subcat, 'id_cat' => $model->id_cat], [
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
            'id_subcat',
            'id_cat',
        ],
    ]) ?>

</div>
