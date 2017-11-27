<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transferencias".
 *
 * @property integer $id
 * @property double $monto
 * @property string $fecha_transferencia
 * @property integer $cliente_origen_id
 * @property integer $cliente_destino_id
 *
 * @property Clientes $clienteOrigen
 * @property Clientes $clienteDestino
 */
class Transferencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transferencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['monto'], 'number'],
            [['fecha_transferencia'], 'safe'],
            [['cliente_origen_id', 'cliente_destino_id'], 'integer'],
            [['cliente_origen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['cliente_origen_id' => 'id']],
            [['cliente_destino_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['cliente_destino_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'monto' => 'Monto',
            'fecha_transferencia' => 'Fecha Transferencia',
            'cliente_origen_id' => 'Cliente Origen ID',
            'cliente_destino_id' => 'Cliente Destino ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienteOrigen()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'cliente_origen_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienteDestino()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'cliente_destino_id']);
    }
}
