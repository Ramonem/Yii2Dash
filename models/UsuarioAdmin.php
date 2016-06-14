<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario_admin".
 *
 * @property string $email_admin
 * @property string $password
 * @property string $rol
 * @property string $authKey
 * @property integer $id
 *
 * @property Error[] $errors
 * @property Ubicacion[] $idUbicacions
 */
class UsuarioAdmin extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
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
            [['id'], 'required'],
            [['id'], 'integer'],
            [['email_admin'], 'string', 'max' => 150],
            [['password'], 'string', 'max' => 100],
            [['rol'], 'string', 'max' => 1],
            [['authKey'], 'string', 'max' => 50],
            [['email_admin'], 'unique'],
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
            'authKey' => 'Auth Key',
            'id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
  /*  public function getErrors()
    {
        return $this->hasMany(Error::className(), ['email_admin' => 'email_admin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUbicacions()
    {
        return $this->hasMany(Ubicacion::className(), ['id_ubicacion' => 'id_ubicacion'])->viaTable('error', ['email_admin' => 'email_admin']);
    }

     public static function findIdentity($id){
        return static::findOne($id);
    }
 
 
    public static function findIdentityByAccessToken($token, $type = null){
        throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
    }
 
    public function getId(){
        return $this->id;
    }
 

    public function getAuthKey(){
        return $this->authKey;//Here I return a value of my authKey column
    }
 
    public function validateAuthKey($authKey){
        return $this->authKey === $authKey;
    }
    public static function findByUsername($username){
        return self::findOne(['email_admin'=>$username]);
    }
 
    public function validatePassword($password){
        return $this->password === $password;
    }
}
