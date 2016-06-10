<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Empresa;
use app\models\Convenio;
use app\models\Campana;
use app\models\Subcategoria;

/* @var $this yii\web\View */
/* @var $model app\models\Descuento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="descuento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_empresa')->dropDownList(ArrayHelper::map(Empresa::find()->all(), 'id_empresa', 'nombre_empresa'), 
             ['prompt'=>'- Elige una empresa -']) ?>

    <?= $form->field($model, 'id_convenio')->dropDownList(ArrayHelper::map(Convenio::find()->all(), 'id_convenio', 'nombre_convenio'), 
             ['prompt'=>'- Elige un convenio -']) ?>

    <?= $form->field($model, 'id_campana')->dropDownList(ArrayHelper::map(Campana::find()->all(), 'id_campana', 'nombre'), 
             ['prompt'=>'- Elige una campaña -']) ?>

    <?= $form->field($model, 'id_subcat')->dropDownList(ArrayHelper::map(Subcategoria::find()->all(), 'id_subcat', 'nombre_subcat'), 
             ['prompt'=>'- Elige una subcategoria -']) ?>


    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descuento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imagen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vigencia_inicio')->textInput() ?>

    <?= $form->field($model, 'vigencia_fin')->textInput() ?>

    <?= $form->field($model, 'contacto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gasto')->textInput() ?>

    <?= $form->field($model, 'creado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
