<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Compartir */

$this->title = 'Create Compartir';
$this->params['breadcrumbs'][] = ['label' => 'Compartirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compartir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
