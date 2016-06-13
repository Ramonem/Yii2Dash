<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ubicacion_descuento".
 *
 * @property integer $id_ubicacion
 * @property integer $id_descuento
 *
 * @property Ubicacion $idUbicacion
 * @property Descuento $idDescuento
 */
class UbicacionDescuento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ubicacion_descuento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ubicacion', 'id_descuento'], 'required'],
            [['id_ubicacion', 'id_descuento'], 'integer'],
            [['id_ubicacion'], 'exist', 'skipOnError' => true, 'targetClass' => Ubicacion::className(), 'targetAttribute' => ['id_ubicacion' => 'id_ubicacion']],
            [['id_descuento'], 'exist', 'skipOnError' => true, 'targetClass' => Descuento::className(), 'targetAttribute' => ['id_descuento' => 'id_descuento']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ubicacion' => 'Ubicación',
            'id_descuento' => 'Título Descuento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUbicacion()
    {
        return $this->hasOne(Ubicacion::className(), ['id_ubicacion' => 'id_ubicacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDescuento()
    {
        return $this->hasOne(Descuento::className(), ['id_descuento' => 'id_descuento']);
    }
}
