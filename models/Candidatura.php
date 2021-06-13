<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidatura".
 *
 * @property int $id
 * @property string $classifications
 * @property string $jobs
 * @property string $specialization
 * @property string $languages
 * @property int $candidato_id
 *
 * @property Candidato $candidato
 * @property CandidaturaFuncionario[] $candidaturaFuncionarios
 */
class Candidatura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'candidatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['classifications', 'jobs', 'specialization', 'languages', 'candidato_id'], 'required'],
            [['candidato_id'], 'integer'],
            [['classifications', 'jobs', 'specialization', 'languages','candidato_id'], 'string', 'max' => 255],
            [['candidato_id'], 'exist', 'skipOnError' => true, 'targetClass' => Candidato::className(), 'targetAttribute' => ['candidato_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'classifications' => 'Classifications',
            'jobs' => 'Jobs',
            'specialization' => 'Specialization',
            'languages' => 'Languages',
            'candidato_id' => 'candidato.nome (FK)',
        ];
    }

    /**
     * Gets query for [[Candidato]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCandidato()
    {
        return $this->hasOne(Candidato::className(), ['id' => 'candidato_id']);
    }

    /**
     * Gets query for [[CandidaturaFuncionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCandidaturaFuncionarios()
    {
        return $this->hasMany(CandidaturaFuncionario::className(), ['candidatura_id' => 'id']);
    }
}
