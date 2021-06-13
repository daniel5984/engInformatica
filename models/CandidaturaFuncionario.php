<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidatura_funcionario".
 *
 * @property int $id
 * @property int $isAprovado
 * @property int $candidatura_id
 *
 * @property Candidatura $candidatura
 */
class CandidaturaFuncionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'candidatura_funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isAprovado', 'candidatura_id'], 'required'],
            [['isAprovado', 'candidatura_id'], 'integer'],
            [['candidatura_id'], 'exist', 'skipOnError' => true, 'targetClass' => Candidatura::className(), 'targetAttribute' => ['candidatura_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isAprovado' => 'Is Aprovado',
            'candidatura_id' => 'Candidatura_id (FK)',
        ];
    }

    /**
     * Gets query for [[Candidatura]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCandidatura()
    {
        return $this->hasOne(Candidatura::className(), ['id' => 'candidatura_id']);
    }
    
 
}
