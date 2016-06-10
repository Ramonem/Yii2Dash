<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HistorialCampana */

$this->title = 'Update Historial Campana: ' . $model->id_historial_camp;
$this->params['breadcrumbs'][] = ['label' => 'Historial Campanas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_historial_camp, 'url' => ['view', 'id' => $model->id_historial_camp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="historial-campana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
