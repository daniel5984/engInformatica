<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quinta".
 *
 * @property int $id
 * @property string $nome
 * @property string $area
 * @property string $morada
 * @property int $num_funcionarios
 * @property string $telefone
 *
 * @property Armazem[] $armazems
 * @property Funcionario[] $funcionarios
 */
class Quinta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quinta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'area', 'morada', 'num_funcionarios', 'telefone'], 'required'],
            [['num_funcionarios'], 'integer'],
            [['nome', 'area', 'morada', 'telefone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'area' => 'Area',
            'morada' => 'Morada',
            'num_funcionarios' => 'Num Funcionarios',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * Gets query for [[Armazems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArmazems()
    {
        return $this->hasMany(Armazem::className(), ['id_quinta' => 'id']);
    }

    /**
     * Gets query for [[Funcionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionarios()
    {
        return $this->hasMany(Funcionario::className(), ['id_quinta' => 'id']);
    }
}
