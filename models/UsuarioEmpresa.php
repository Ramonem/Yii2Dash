<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario_empresa".
 *
 * @property string $email_ue
 * @property integer $id_empresa
 * @property string $nombre
 * @property string $password
 *
 * @property Presupuesto[] $presupuestos
 * @property Empresa $idEmpresa
 */
class UsuarioEmpresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario_empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_ue'], 'required'],
            [['id_empresa'], 'integer'],
            [['email_ue', 'nombre'], 'string', 'max' => 150],
            [['password'], 'string', 'max' => 100],
            [['id_empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['id_empresa' => 'id_empresa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email_ue' => 'Email Ue',
            'id_empresa' => 'Empresa',
            'nombre' => 'Nombre',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresupuestos()
    {
        return $this->hasMany(Presupuesto::className(), ['email_ue' => 'email_ue']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['id_empresa' => 'id_empresa']);
    }
}
