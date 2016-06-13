<?php

namespace app\models;


use Yii;

/**
 * This is the model class for table "presupuesto".
 *
 * @property integer $id_presupuesto
 * @property string $nombre
 * @property integer $presupuesto
 * @property string $fecha_inicio
 * @property string $fecha_final
 * @property string $email_ue
 *
 * @property Campana[] $campanas
 * @property HistorialCampana[] $historialCampanas
 * @property UsuarioEmpresa $emailUe
 */
class Presupuesto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'presupuesto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'fecha_inicio', 'fecha_final','email_ue', 'presupuesto'], 'required'],
            [['presupuesto'], 'integer'],
            [['fecha_inicio', 'fecha_final'], 'safe'],
            [['nombre'], 'string', 'max' => 100],
            [['email_ue'], 'string', 'max' => 150],
            [['email_ue'], 'exist', 'skipOnError' => true, 'targetClass' => UsuarioEmpresa::className(), 'targetAttribute' => ['email_ue' => 'email_ue']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_presupuesto' => 'Id Presupuesto',
            'nombre' => 'Nombre presupuesto',
            'presupuesto' => 'Presupuesto',
            'fecha_inicio' => 'Fecha inicio',
            'fecha_final' => 'Fecha final',
            'email_ue' => 'Usuario empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampanas()
    {
        return $this->hasMany(Campana::className(), ['id_presupuesto' => 'id_presupuesto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialCampanas()
    {
        return $this->hasMany(HistorialCampana::className(), ['id_presupuesto' => 'id_presupuesto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailUe()
    {
        return $this->hasOne(UsuarioEmpresa::className(), ['email_ue' => 'email_ue']);
    }
}
