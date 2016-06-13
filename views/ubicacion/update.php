<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ubicacion */

$this->title = 'Actualizar ubicación: ' . $model->id_ubicacion;
$this->params['breadcrumbs'][] = ['label' => 'Ubicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ubicacion, 'url' => ['view', 'id' => $model->id_ubicacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ubicacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
