<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historial_favorito".
 *
 * @property integer $id_historial_desc
 * @property string $email
 *
 * @property HistorialDescuento $idHistorialDesc
 * @property Usuario $email0
 */
class HistorialFavorito extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historial_favorito';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_historial_desc', 'email'], 'required'],
            [['id_historial_desc'], 'integer'],
            [['email'], 'string', 'max' => 150],
            [['id_historial_desc'], 'exist', 'skipOnError' => true, 'targetClass' => HistorialDescuento::className(), 'targetAttribute' => ['id_historial_desc' => 'id_historial_desc']],
            [['email'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['email' => 'email']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_historial_desc' => 'Id Historial Desc',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHistorialDesc()
    {
        return $this->hasOne(HistorialDescuento::className(), ['id_historial_desc' => 'id_historial_desc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmail0()
    {
        return $this->hasOne(Usuario::className(), ['email' => 'email']);
    }
}
