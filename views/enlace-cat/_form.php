<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Categoria;
use app\models\Subcategoria;

/* @var $this yii\web\View */
/* @var $model app\models\EnlaceCat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enlace-cat-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'id_cat')->dropDownList(ArrayHelper::map(Categoria::find()->all(), 'id_cat', 'nombre_cat'), 
             ['prompt'=>'- Elige una categoria -']) ?>

    <?= $form->field($model, 'id_subcat')->dropDownList(ArrayHelper::map(Subcategoria::find()->all(), 'id_subcat', 'nombre_subcat'), 
             ['prompt'=>'- Elige una subcategoria -']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
