<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ubicacion".
 *
 * @property integer $id_ubicacion
 * @property integer $id_empresa
 * @property string $direccion
 * @property double $lat
 * @property double $lon
 *
 * @property ErrorUbicacion[] $errorUbicacions
 * @property UsuarioAdmin[] $emailAdmins
 * @property Empresa $idEmpresa
 * @property UbicacionDescuento[] $ubicacionDescuentos
 * @property Descuento[] $idDescuentos
 */
class Ubicacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ubicacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_empresa', 'direccion', 'lat', 'lon'], 'required'],
            [['id_empresa'], 'integer'],
            [['lat', 'lon'], 'number'],
            [['direccion'], 'string', 'max' => 250],
            [['id_empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['id_empresa' => 'id_empresa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ubicacion' => 'Id Ubicacion',
            'id_empresa' => 'Id Empresa',
            'direccion' => 'Direccion',
            'lat' => 'Lat',
            'lon' => 'Lon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getErrorUbicacions()
    {
        return $this->hasMany(ErrorUbicacion::className(), ['id_ubicacion' => 'id_ubicacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailAdmins()
    {
        return $this->hasMany(UsuarioAdmin::className(), ['email_admin' => 'email_admin'])->viaTable('error_ubicacion', ['id_ubicacion' => 'id_ubicacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['id_empresa' => 'id_empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUbicacionDescuentos()
    {
        return $this->hasMany(UbicacionDescuento::className(), ['id_ubicacion' => 'id_ubicacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDescuentos()
    {
        return $this->hasMany(Descuento::className(), ['id_descuento' => 'id_descuento'])->viaTable('ubicacion_descuento', ['id_ubicacion' => 'id_ubicacion']);
    }
}
