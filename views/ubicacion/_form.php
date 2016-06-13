<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Empresa;

/* @var $this yii\web\View */
/* @var $model app\models\Ubicacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ubicacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_empresa')->dropDownList(ArrayHelper::map(Empresa::find()->all(), 'id_empresa', 'nombre_empresa'), 
             ['prompt'=>'- Elige una empresa -']) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lat')->textInput() ?>

    <?= $form->field($model, 'lon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
