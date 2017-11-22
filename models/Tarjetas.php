<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarjetas".
 *
 * @property integer $id
 * @property string $numero
 * @property double $cupo
 * @property string $tipo
 *
 * @property Clientes[] $clientes
 */
class Tarjetas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarjetas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero'], 'required'],
            [['cupo'], 'number'],
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
            'cupo' => 'Cupo',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Clientes::className(), ['tarjetas_id' => 'id']);
    }
}
