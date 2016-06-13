<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\UsuarioEmpresa;

/* @var $this yii\web\View */
/* @var $model app\models\Presupuesto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presupuesto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'presupuesto')->textInput() ?>

    <?= $form->field($model, 'fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'fecha_final')->textInput() ?>

    <?= $form->field($model, 'email_ue')->dropDownList(ArrayHelper::map(UsuarioEmpresa::find()->all(), 'email_ue', 'email_ue'), 
             ['prompt'=>'- Elige un usuario empresa -']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
