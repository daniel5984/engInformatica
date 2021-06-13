<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "armazem".
 *
 * @property int $id
 * @property int $id_quinta
 * @property string $tamanho
 * @property int $num_lotes
 *
 * @property Quinta $quinta
 * @property Lote[] $lotes
 */
class Armazem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'armazem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_quinta', 'tamanho', 'num_lotes'], 'required'],
            [['id_quinta', 'num_lotes'], 'integer'],
            [['tamanho'], 'string', 'max' => 255],
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
            'id_quinta' => 'Id Quinta',
            'tamanho' => 'Tamanho',
            'num_lotes' => 'Num Lotes',
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

    /**
     * Gets query for [[Lotes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLotes()
    {
        return $this->hasMany(Lote::className(), ['id_armazem' => 'id']);
    }
}
