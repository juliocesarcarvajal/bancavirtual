<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Transferencias */

$this->title = 'Create Transferencias';
$this->params['breadcrumbs'][] = ['label' => 'Transferencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transferencias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
