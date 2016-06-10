<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ErrorUbicacion */

$this->title = 'Update Error Ubicacion: ' . $model->id_ubicacion;
$this->params['breadcrumbs'][] = ['label' => 'Error Ubicacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ubicacion, 'url' => ['view', 'id_ubicacion' => $model->id_ubicacion, 'email_admin' => $model->email_admin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="error-ubicacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
