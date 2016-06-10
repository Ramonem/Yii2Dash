<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ErrorUbicacion */

$this->title = $model->id_ubicacion;
$this->params['breadcrumbs'][] = ['label' => 'Error Ubicacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="error-ubicacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_ubicacion' => $model->id_ubicacion, 'email_admin' => $model->email_admin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_ubicacion' => $model->id_ubicacion, 'email_admin' => $model->email_admin], [
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
            'id_ubicacion',
            'email_admin:email',
            'causa',
            'fecha',
        ],
    ]) ?>

</div>
