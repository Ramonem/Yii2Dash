<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historial_campana".
 *
 * @property integer $id_historial_camp
 * @property string $email_ue
 * @property string $nombre
 * @property string $descripcion
 * @property integer $presupuesto_campana
 * @property integer $id_presupuesto
 * @property string $inicio
 * @property string $fin
 *
 * @property Presupuesto $idPresupuesto
 * @property HistorialDescuento[] $historialDescuentos
 */
class HistorialCampana extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historial_campana';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['presupuesto_campana', 'id_presupuesto'], 'integer'],
            [['inicio', 'fin'], 'safe'],
            [['email_ue', 'nombre'], 'string', 'max' => 100],
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
            'id_historial_camp' => 'Id Historial Camp',
            'email_ue' => 'Email Ue',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'presupuesto_campana' => 'Presupuesto Campana',
            'id_presupuesto' => 'Id Presupuesto',
            'inicio' => 'Inicio',
            'fin' => 'Fin',
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
    public function getHistorialDescuentos()
    {
        return $this->hasMany(HistorialDescuento::className(), ['id_historial_camp' => 'id_historial_camp']);
    }
}
