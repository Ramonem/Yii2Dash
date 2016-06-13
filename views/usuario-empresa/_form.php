<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Empresa;


/* @var $this yii\web\View */
/* @var $model app\models\UsuarioEmpresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-empresa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_empresa')->dropDownList(ArrayHelper::map(Empresa::find()->all(), 'id_empresa', 'nombre_empresa')) ?>

    <?= $form->field($model, 'email_ue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
