<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rating".
 *
 * @property integer $id_descuento
 * @property string $email
 * @property integer $rating
 *
 * @property Descuento $idDescuento
 * @property Usuario $email0
 */
class Rating extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rating';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_descuento', 'email'], 'required'],
            [['id_descuento', 'rating'], 'integer'],
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
            'rating' => 'Rating',
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
