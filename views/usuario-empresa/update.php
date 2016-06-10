<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioEmpresa */

$this->title = 'Update Usuario Empresa: ' . $model->email_ue;
$this->params['breadcrumbs'][] = ['label' => 'Usuario Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email_ue, 'url' => ['view', 'id' => $model->email_ue]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuario-empresa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
