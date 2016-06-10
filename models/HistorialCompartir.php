<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historial_compartir".
 *
 * @property integer $id_historial_desc
 * @property string $email
 * @property integer $contador
 *
 * @property HistorialDescuento $idHistorialDesc
 * @property Usuario $email0
 */
class HistorialCompartir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historial_compartir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_historial_desc', 'email'], 'required'],
            [['id_historial_desc', 'contador'], 'integer'],
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
            'contador' => 'Contador',
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
