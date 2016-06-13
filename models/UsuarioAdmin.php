<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario_admin".
 *
 * @property string $email_admin
 * @property string $password
 * @property string $rol
 *
 * @property ErrorUbicacion[] $errorUbicacions
 * @property Ubicacion[] $idUbicacions
 */
class UsuarioAdmin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_admin', 'password', 'rol'], 'required'],
            [['email_admin'], 'string', 'max' => 150],
            [['password'], 'string', 'max' => 100],
            [['rol'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email_admin' => 'Email Admin',
            'password' => 'Password',
            'rol' => 'Rol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getErrorUbicacions()
    {
        return $this->hasMany(ErrorUbicacion::className(), ['email_admin' => 'email_admin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUbicacions()
    {
        return $this->hasMany(Ubicacion::className(), ['id_ubicacion' => 'id_ubicacion'])->viaTable('error_ubicacion', ['email_admin' => 'email_admin']);
    }
}
