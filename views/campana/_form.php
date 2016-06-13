<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\UsuarioEmpresa;
use app\models\Presupuesto;


/* @var $this yii\web\View */
/* @var $model app\models\Campana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campana-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email_ue')->dropDownList(ArrayHelper::map(UsuarioEmpresa::find()->all(), 'email_ue', 'email_ue'), 
             ['prompt'=>'- Elige un usuario empresa -']) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'presupuesto_campana')->textInput() ?>

    <?= $form->field($model, 'id_presupuesto')->dropDownList(ArrayHelper::map(Presupuesto::find()->all(), 'id_presupuesto', 'nombre'), 
             ['prompt'=>'- Elige un presupuesto -']) ?>

    <?= $form->field($model, 'inicio')->textInput() ?>

    <?= $form->field($model, 'fin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
