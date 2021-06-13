<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encomenda_venda".
 *
 * @property int $id
 * @property int $cliente_id
 * @property int $lote_id
 * @property string $quantidade_tipo
 *
 * @property Lote $lote
 * @property Cliente $cliente
 */
class EncomendaVenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'encomenda_venda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cliente_id', 'lote_id', 'quantidade_tipo'], 'required'],
            [['cliente_id', 'lote_id'], 'integer'],
            [['quantidade_tipo'], 'string', 'max' => 255],
            [['lote_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lote::className(), 'targetAttribute' => ['lote_id' => 'id']],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['cliente_id' => 'id_cliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cliente_id' => 'cliente.nome (FK)',
            'lote_id' => 'lote_id (FK)',
            'quantidade_tipo' => 'Quantidade Tipo',
        ];
    }

    /**
     * Gets query for [[Lote]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLote()
    {
        return $this->hasOne(Lote::className(), ['id' => 'lote_id']);
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id_cliente' => 'cliente_id']);
    }
}
