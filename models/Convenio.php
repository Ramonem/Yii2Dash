<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "convenio".
 *
 * @property integer $id_convenio
 * @property string $nombre_convenio
 * @property integer $id_empresa
 *
 * @property Empresa $idEmpresa
 * @property Descuento[] $descuentos
 */
class Convenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_convenio', 'id_empresa'], 'required'],
            [['id_empresa'], 'integer'],
            [['nombre_convenio'], 'string', 'max' => 150],
            [['id_empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['id_empresa' => 'id_empresa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_convenio' => 'Id Convenio',
            'nombre_convenio' => 'Nombre convenio',
            'id_empresa' => 'Empresa',
        ];
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
    public function getDescuentos()
    {
        return $this->hasMany(Descuento::className(), ['id_convenio' => 'id_convenio']);
    }
}
