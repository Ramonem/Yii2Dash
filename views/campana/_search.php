<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CampanaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campana-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_campana') ?>

    <?= $form->field($model, 'email_ue') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'presupuesto_campana') ?>

    <?php // echo $form->field($model, 'id_presupuesto') ?>

    <?php // echo $form->field($model, 'inicio') ?>

    <?php // echo $form->field($model, 'fin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
