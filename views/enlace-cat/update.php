<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EnlaceCat */

$this->title = 'Actualizar enlace cat: ' . $model->id_subcat;
$this->params['breadcrumbs'][] = ['label' => 'Enlace categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_subcat, 'url' => ['view', 'id_subcat' => $model->id_subcat, 'id_cat' => $model->id_cat]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="enlace-cat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
