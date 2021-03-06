<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HistorialCampana */

$this->title = $model->id_historial_camp;
$this->params['breadcrumbs'][] = ['label' => 'Historial Campanas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historial-campana-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_historial_camp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_historial_camp], [
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
            'id_historial_camp',
            'email_ue:email',
            'nombre',
            'descripcion',
            'presupuesto_campana',
            'id_presupuesto',
            'inicio',
            'fin',
        ],
    ]) ?>

</div>
