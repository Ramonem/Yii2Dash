<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Presupuesto */

$this->title = 'Actualizar Presupuesto: ' . $model->id_presupuesto;
$this->params['breadcrumbs'][] = ['label' => 'Presupuestos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_presupuesto, 'url' => ['view', 'id' => $model->id_presupuesto]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="presupuesto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
