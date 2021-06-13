<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $id
 * @property int $idade
 * @property string $nome
 * @property string $morada
 * @property string $telefone
 * @property int $id_quinta
 * @property string $funcao
 *
 * @property Quinta $quinta
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idade', 'nome', 'morada', 'telefone', 'id_quinta', 'funcao'], 'required'],
            [['idade', 'id_quinta'], 'integer'],
            [['nome', 'morada', 'telefone', 'funcao'], 'string', 'max' => 255],
            [['id_quinta'], 'exist', 'skipOnError' => true, 'targetClass' => Quinta::className(), 'targetAttribute' => ['id_quinta' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idade' => 'Idade',
            'nome' => 'Nome',
            'morada' => 'Morada',
            'telefone' => 'Telefone',
            'id_quinta' => 'Id Quinta',
            'funcao' => 'Funcao',
        ];
    }

    /**
     * Gets query for [[Quinta]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuinta()
    {
        return $this->hasOne(Quinta::className(), ['id' => 'id_quinta']);
    }
}
