<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SaveGusto */

$this->title = 'Create Save Gusto';
$this->params['breadcrumbs'][] = ['label' => 'Save Gustos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="save-gusto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
