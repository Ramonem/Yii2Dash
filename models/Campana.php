<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campana".
 *
 * @property integer $id_campana
 * @property string $email_ue
 * @property string $nombre
 * @property string $descripcion
 * @property integer $presupuesto_campana
 * @property integer $id_presupuesto
 * @property string $inicio
 * @property string $fin
 *
 * @property Presupuesto $idPresupuesto
 * @property Descuento[] $descuentos
 */
class Campana extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campana';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'inicio', 'fin', 'presupuesto_campana', 'email_ue', 'descripcion', 'id_presupuesto'], 'required'],
            [['presupuesto_campana', 'id_presupuesto'], 'integer'],
            [['inicio', 'fin'], 'safe'],
            [['email_ue'], 'string', 'max' => 150],
            [['nombre'], 'string', 'max' => 100],
            [['descripcion'], 'string', 'max' => 250],
            [['id_presupuesto'], 'exist', 'skipOnError' => true, 'targetClass' => Presupuesto::className(), 'targetAttribute' => ['id_presupuesto' => 'id_presupuesto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_campana' => 'Id Campaña',
            'email_ue' => 'Usuario empresa',
            'nombre' => 'Nombre campaña',
            'descripcion' => 'Descripcion',
            'presupuesto_campana' => 'Presupuesto campaña',
            'id_presupuesto' => 'Presupuesto',
            'inicio' => 'Fecha inicio',
            'fin' => 'Fecha final',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPresupuesto()
    {
        return $this->hasOne(Presupuesto::className(), ['id_presupuesto' => 'id_presupuesto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDescuentos()
    {
        return $this->hasMany(Descuento::className(), ['id_campana' => 'id_campana']);
    }
}
