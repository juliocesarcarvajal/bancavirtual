<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Cuentas;
use app\models\Tarjetas;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->nombres.' '.$model->apellidos;
?>
<div class="clientes-view">

    <h1>Detalle del cliente: <?= Html::encode($model->nombres.' '.$model->apellidos) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombres',
            'apellidos',
            'cedula',
            'telefono',
            'direccion',
            'sexo',
            'email:email',
            'cuentas_id' => array('label' => 'Cuenta', 'value' => Cuentas::findOne($model->cuentas_id)->numero),
            'tarjetas_id' => array('label' => 'Tarjeta', 'value' => Tarjetas::findOne($model->tarjetas_id)->numero),
        ],
    ]) ?>

</div>
