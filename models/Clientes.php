<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $cedula
 * @property string $telefono
 * @property string $direccion
 * @property string $sexo
 * @property string $email
 * @property integer $cuentas_id
 * @property integer $tarjetas_id
 *
 * @property Cuentas $cuentas
 * @property Tarjetas $tarjetas
 * @property Trasferencias[] $trasferencias
 * @property Trasferencias[] $trasferencias0
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombres', 'apellidos', 'cedula', 'telefono', 'direccion', 'sexo', 'email'], 'required'],
            [['cuentas_id', 'tarjetas_id'], 'integer'],
            [['nombres', 'apellidos', 'email'], 'string', 'max' => 128],
            [['cedula', 'telefono', 'direccion'], 'string', 'max' => 32],
            [['sexo'], 'string', 'max' => 16],
            [['cedula'], 'unique'],
            [['cuentas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cuentas::className(), 'targetAttribute' => ['cuentas_id' => 'id']],
            [['tarjetas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tarjetas::className(), 'targetAttribute' => ['tarjetas_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'cedula' => 'Cedula',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
            'sexo' => 'Sexo',
            'email' => 'Email',
            'cuentas_id' => 'Cuentas ID',
            'tarjetas_id' => 'Tarjetas ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuentas()
    {
        return $this->hasOne(Cuentas::className(), ['id' => 'cuentas_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTarjetas()
    {
        return $this->hasOne(Tarjetas::className(), ['id' => 'tarjetas_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrasferencias()
    {
        return $this->hasMany(Trasferencias::className(), ['cliente_origen_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrasferencias0()
    {
        return $this->hasMany(Trasferencias::className(), ['cliente_destino_id' => 'id']);
    }
}
