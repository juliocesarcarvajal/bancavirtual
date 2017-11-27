<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cuentas;
use app\models\Tarjetas;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->dropDownList(['Masculino' => 'Masculino', 'Femenino' => 'Femenino'],['prompt'=>'Escoja el sexo de la persona']); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuentas_id')->dropDownList(
      ArrayHelper::map(Cuentas::find()->all(),'id','numero'),['prompt'=>'Escoja una cuenta']);
    ?>

    <?= $form->field($model, 'tarjetas_id')->dropDownList(
      ArrayHelper::map(Tarjetas::find()->all(),'id','numero'),['prompt'=>'Escoja una tarjeta']);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
