<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Compartir */

$this->title = 'Update Compartir: ' . $model->id_descuento;
$this->params['breadcrumbs'][] = ['label' => 'Compartirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_descuento, 'url' => ['view', 'id_descuento' => $model->id_descuento, 'email' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="compartir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
