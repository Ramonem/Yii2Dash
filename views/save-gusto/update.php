<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SaveGusto */

$this->title = 'Update Save Gusto: ' . $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Save Gustos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email, 'url' => ['view', 'id' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="save-gusto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
