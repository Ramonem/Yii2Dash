<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HistorialRecordar */

$this->title = $model->id_historial_desc;
$this->params['breadcrumbs'][] = ['label' => 'Historial Recordars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historial-recordar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_historial_desc' => $model->id_historial_desc, 'email' => $model->email], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_historial_desc' => $model->id_historial_desc, 'email' => $model->email], [
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
            'id_historial_desc',
            'email:email',
        ],
    ]) ?>

</div>
