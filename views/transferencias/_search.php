<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransferenciasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transferencias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'monto') ?>

    <?= $form->field($model, 'fecha_transferencia') ?>

    <?= $form->field($model, 'cliente_origen_id') ?>

    <?= $form->field($model, 'cliente_destino_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
