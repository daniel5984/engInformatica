<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id_cliente
 * @property string $nome
 * @property string $morada
 * @property int $id_user
 *
 * @property User $user
 * @property EncomendaVenda[] $encomendaVendas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'morada', 'id_user'], 'required'],
            [['id_user'], 'integer'],
            [['nome', 'morada'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cliente' => 'Id Cliente',
            'nome' => 'Nome',
            'morada' => 'Morada',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * Gets query for [[EncomendaVendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEncomendaVendas()
    {
        return $this->hasMany(EncomendaVenda::className(), ['cliente_id' => 'id_cliente']);
    }
}
