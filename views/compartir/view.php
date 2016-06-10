<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Compartir */

$this->title = $model->id_descuento;
$this->params['breadcrumbs'][] = ['label' => 'Compartirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compartir-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_descuento' => $model->id_descuento, 'email' => $model->email], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_descuento' => $model->id_descuento, 'email' => $model->email], [
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
            'id_descuento',
            'email:email',
            'contador',
        ],
    ]) ?>

</div>
