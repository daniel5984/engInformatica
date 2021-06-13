<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidato".
 *
 * @property int $id
 * @property string $nome
 * @property string $morada
 * @property string $telefone
 * @property int $idade
 *
 * @property Candidatura[] $candidaturas
 */
class Candidato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'candidato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'morada', 'telefone', 'idade'], 'required'],
            [['idade'], 'integer'],
            [['nome', 'morada', 'telefone'], 'string', 'max' => 255],
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
            'morada' => 'Morada',
            'telefone' => 'Telefone',
            'idade' => 'Idade',
        ];
    }

    /**
     * Gets query for [[Candidaturas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCandidaturas()
    {
        return $this->hasMany(Candidatura::className(), ['candidato_id' => 'id']);
    }
}
