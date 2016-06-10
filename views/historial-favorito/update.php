<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HistorialFavorito */

$this->title = 'Update Historial Favorito: ' . $model->id_historial_desc;
$this->params['breadcrumbs'][] = ['label' => 'Historial Favoritos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_historial_desc, 'url' => ['view', 'id_historial_desc' => $model->id_historial_desc, 'email' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="historial-favorito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
