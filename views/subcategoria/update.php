<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subcategoria */

$this->title = 'Actualizar Subcategoria: ' . $model->id_subcat;
$this->params['breadcrumbs'][] = ['label' => 'Subcategorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_subcat, 'url' => ['view', 'id' => $model->id_subcat]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="subcategoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
