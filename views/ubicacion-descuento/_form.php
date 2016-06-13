<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Descuento;
use app\models\Ubicacion;

/* @var $this yii\web\View */
/* @var $model app\models\UbicacionDescuento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ubicacion-descuento-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'id_descuento')->dropDownList(ArrayHelper::map(Descuento::find()->all(), 'id_descuento', 'nombre'), 
             ['prompt'=>'- Elige un descuento -']) ?>

 	<?= $form->field($model, 'id_ubicacion')->dropDownList(ArrayHelper::map(Ubicacion::find()->all(), 'id_ubicacion', 'direccion'), 
             ['prompt'=>'- Elige una ubicación -']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
