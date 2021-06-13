<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lote".
 *
 * @property int $id
 * @property int $num_ovos
 * @property int $id_armazem
 * @property string $tipoOvo
 *
 * @property EncomendaVenda[] $encomendaVendas
 * @property Armazem $armazem
 * @property Ovo[] $ovos
 */
class Lote extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lote';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_ovos', 'id_armazem', 'tipoOvo'], 'required'],
            [['num_ovos', 'id_armazem'], 'integer'],
            [['tipoOvo'], 'string', 'max' => 255],
            [['id_armazem'], 'exist', 'skipOnError' => true, 'targetClass' => Armazem::className(), 'targetAttribute' => ['id_armazem' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num_ovos' => 'Num Ovos',
            'id_armazem' => 'Id Armazem',
            'tipoOvo' => 'Tipo Ovo',
        ];
    }

    /**
     * Gets query for [[EncomendaVendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEncomendaVendas()
    {
        return $this->hasMany(EncomendaVenda::className(), ['lote_id' => 'id']);
    }

    /**
     * Gets query for [[Armazem]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArmazem()
    {
        return $this->hasOne(Armazem::className(), ['id' => 'id_armazem']);
    }

    /**
     * Gets query for [[Ovos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOvos()
    {
        return $this->hasMany(Ovo::className(), ['id_lote' => 'id']);
    }
}
