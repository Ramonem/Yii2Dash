<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Recordar */

$this->title = 'Create Recordar';
$this->params['breadcrumbs'][] = ['label' => 'Recordars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recordar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
