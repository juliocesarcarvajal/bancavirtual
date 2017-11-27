<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransferenciasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transferencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transferencias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transferencias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'monto',
            'fecha_transferencia',
            'cliente_origen_id',
            'cliente_destino_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
