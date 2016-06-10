<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ErrorUbicacion */

$this->title = 'Create Error Ubicacion';
$this->params['breadcrumbs'][] = ['label' => 'Error Ubicacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="error-ubicacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
