<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SaveConvenio */

$this->title = 'Create Save Convenio';
$this->params['breadcrumbs'][] = ['label' => 'Save Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="save-convenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
