<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EnlaceCat */

$this->title = 'Crear enlace cat';
$this->params['breadcrumbs'][] = ['label' => 'Enlace categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enlace-cat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
