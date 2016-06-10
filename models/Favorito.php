<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "favorito".
 *
 * @property integer $id_descuento
 * @property string $email
 *
 * @property Descuento $idDescuento
 * @property Usuario $email0
 */
class Favorito extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'favorito';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_descuento', 'email'], 'required'],
            [['id_descuento'], 'integer'],
            [['email'], 'string', 'max' => 150],
            [['id_descuento'], 'exist', 'skipOnError' => true, 'targetClass' => Descuento::className(), 'targetAttribute' => ['id_descuento' => 'id_descuento']],
            [['email'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['email' => 'email']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_descuento' => 'Id Descuento',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDescuento()
    {
        return $this->hasOne(Descuento::className(), ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmail0()
    {
        return $this->hasOne(Usuario::className(), ['email' => 'email']);
    }
}
