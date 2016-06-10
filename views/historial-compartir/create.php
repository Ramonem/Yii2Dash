<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HistorialCompartir */

$this->title = 'Create Historial Compartir';
$this->params['breadcrumbs'][] = ['label' => 'Historial Compartirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historial-compartir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
