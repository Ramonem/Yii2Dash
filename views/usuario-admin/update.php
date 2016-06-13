<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioAdmin */

$this->title = 'Actualizar usuario admin: ' . $model->email_admin;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios Admin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email_admin, 'url' => ['view', 'id' => $model->email_admin]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="usuario-admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
