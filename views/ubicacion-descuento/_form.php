<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UbicacionDescuento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ubicacion-descuento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ubicacion')->textInput() ?>

    <?= $form->field($model, 'id_descuento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
