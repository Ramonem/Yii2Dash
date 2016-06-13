<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Convenio */

$this->title = 'Actualizar Convenio: ' . $model->id_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_convenio, 'url' => ['view', 'id' => $model->id_convenio]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
