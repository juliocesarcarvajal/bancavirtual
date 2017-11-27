<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cuentas;

/* @var $this yii\web\View */
/* @var $model app\models\Pagos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'servicio')->dropDownList(['Agua' => 'Agua', 'Luz' => 'Luz', 'Gas' => 'Gas'],['prompt'=>'Escoja el servicio que va a pagar']); ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <?= $form->field($model, 'cliente_origen_id')->dropDownList(
      ArrayHelper::map(Cuentas::find()->all(),'id','numero'),['prompt'=>'Escoja una cuenta']);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
