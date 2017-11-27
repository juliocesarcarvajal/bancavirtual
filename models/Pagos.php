<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagos".
 *
 * @property integer $id
 * @property string $servicio
 * @property double $valor
 * @property integer $cliente_origen_id
 *
 * @property Clientes $clienteOrigen
 */
class Pagos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pagos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['servicio', 'cliente_origen_id'], 'required'],
            [['valor'], 'number'],
            [['cliente_origen_id'], 'integer'],
            [['servicio'], 'string', 'max' => 32],
            [['cliente_origen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['cliente_origen_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'servicio' => 'Servicio',
            'valor' => 'Valor',
            'cliente_origen_id' => 'Cliente Origen ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienteOrigen()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'cliente_origen_id']);
    }
}
