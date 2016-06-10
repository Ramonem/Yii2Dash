<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HistorialDescuentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historial-descuento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_historial_desc') ?>

    <?= $form->field($model, 'id_empresa') ?>

    <?= $form->field($model, 'id_historial_camp') ?>

    <?= $form->field($model, 'id_subcat') ?>

    <?= $form->field($model, 'descuento') ?>

    <?php // echo $form->field($model, 'imagen') ?>

    <?php // echo $form->field($model, 'vigencia_inicio') ?>

    <?php // echo $form->field($model, 'vigencia_fin') ?>

    <?php // echo $form->field($model, 'contacto') ?>

    <?php // echo $form->field($model, 'gasto') ?>

    <?php // echo $form->field($model, 'creado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
