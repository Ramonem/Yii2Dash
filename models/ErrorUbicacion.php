<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "error_ubicacion".
 *
 * @property integer $id_ubicacion
 * @property string $email_admin
 * @property string $causa
 * @property string $fecha
 *
 * @property Ubicacion $idUbicacion
 * @property UsuarioAdmin $emailAdmin
 */
class ErrorUbicacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'error_ubicacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ubicacion', 'email_admin'], 'required'],
            [['id_ubicacion'], 'integer'],
            [['fecha'], 'safe'],
            [['email_admin'], 'string', 'max' => 150],
            [['causa'], 'string', 'max' => 250],
            [['id_ubicacion'], 'exist', 'skipOnError' => true, 'targetClass' => Ubicacion::className(), 'targetAttribute' => ['id_ubicacion' => 'id_ubicacion']],
            [['email_admin'], 'exist', 'skipOnError' => true, 'targetClass' => UsuarioAdmin::className(), 'targetAttribute' => ['email_admin' => 'email_admin']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ubicacion' => 'Id Ubicacion',
            'email_admin' => 'Email Admin',
            'causa' => 'Causa',
            'fecha' => 'Fecha',
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
    public function getEmailAdmin()
    {
        return $this->hasOne(UsuarioAdmin::className(), ['email_admin' => 'email_admin']);
    }
}
