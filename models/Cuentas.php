<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuentas".
 *
 * @property integer $id
 * @property string $numero
 * @property double $saldo
 * @property string $tipo
 *
 * @property Clientes[] $clientes
 */
class Cuentas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuentas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero'], 'required'],
            [['saldo'], 'number'],
            [['numero'], 'string', 'max' => 32],
            [['tipo'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
            'saldo' => 'Saldo',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Clientes::className(), ['cuentas_id' => 'id']);
    }
}
