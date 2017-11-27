<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Clientes;

/* @var $this yii\web\View */
/* @var $model app\models\Transferencias */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transferencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transferencias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'monto',
            'fecha_transferencia',
            'cliente_origen_id' => array('label' => 'Cliente Origen', 'value' =>
            Clientes::findOne($model->cliente_origen_id)->nombres.' '.
            Clientes::findOne($model->cliente_origen_id)->apellidos.' | Cédula '.
            Clientes::findOne($model->cliente_origen_id)->cedula),
            'cliente_destino_id'=> array('label' => 'Cliente Origen', 'value' =>
            Clientes::findOne($model->cliente_destino_id)->nombres.' '.
            Clientes::findOne($model->cliente_destino_id)->apellidos.' | Cédula '.
            Clientes::findOne($model->cliente_destino_id)->cedula),
        ],
    ]) ?>

</div>
