<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cuentas;

/* @var $this yii\web\View */
/* @var $model app\models\Transferencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transferencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'monto')->textInput() ?>

    <?= $form->field($model, 'cliente_origen_id')->dropDownList(
      ArrayHelper::map(Cuentas::find()->all(),'id','numero'),['prompt'=>'Escoja una cuenta']);
    ?>

    <?= $form->field($model, 'cliente_destino_id')->dropDownList(
      ArrayHelper::map(Cuentas::find()->all(),'id','numero'),['prompt'=>'Escoja una cuenta']);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
