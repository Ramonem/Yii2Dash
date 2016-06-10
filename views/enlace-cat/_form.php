<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EnlaceCat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enlace-cat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_subcat')->textInput() ?>

    <?= $form->field($model, 'id_cat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
