<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UsuarioEmpresa */

$this->title = 'Create Usuario Empresa';
$this->params['breadcrumbs'][] = ['label' => 'Usuario Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-empresa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>