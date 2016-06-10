<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SaveConvenio */

$this->title = 'Update Save Convenio: ' . $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Save Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email, 'url' => ['view', 'id' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="save-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
