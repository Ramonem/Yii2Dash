<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioAdmin */

$this->title = 'Update Usuario Admin: ' . $model->email_admin;
$this->params['breadcrumbs'][] = ['label' => 'Usuario Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email_admin, 'url' => ['view', 'id' => $model->email_admin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuario-admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
