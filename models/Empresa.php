<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $id_empresa
 * @property string $nombre_empresa
 *
 * @property Convenio[] $convenios
 * @property Descuento[] $descuentos
 * @property HistorialDescuento[] $historialDescuentos
 * @property Ubicacion[] $ubicacions
 * @property UsuarioEmpresa[] $usuarioEmpresas
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_empresa'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_empresa' => 'Id Empresa',
            'nombre_empresa' => 'Nombre Empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConvenios()
    {
        return $this->hasMany(Convenio::className(), ['id_empresa' => 'id_empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDescuentos()
    {
        return $this->hasMany(Descuento::className(), ['id_empresa' => 'id_empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialDescuentos()
    {
        return $this->hasMany(HistorialDescuento::className(), ['id_empresa' => 'id_empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUbicacions()
    {
        return $this->hasMany(Ubicacion::className(), ['id_empresa' => 'id_empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioEmpresas()
    {
        return $this->hasMany(UsuarioEmpresa::className(), ['id_empresa' => 'id_empresa']);
    }
}
