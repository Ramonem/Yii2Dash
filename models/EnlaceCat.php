<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enlace_cat".
 *
 * @property integer $id_subcat
 * @property integer $id_cat
 *
 * @property Subcategoria $idSubcat
 * @property Categoria $idCat
 */
class EnlaceCat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enlace_cat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_subcat', 'id_cat'], 'required'],
            [['id_subcat', 'id_cat'], 'integer'],
            [['id_subcat'], 'exist', 'skipOnError' => true, 'targetClass' => Subcategoria::className(), 'targetAttribute' => ['id_subcat' => 'id_subcat']],
            [['id_cat'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['id_cat' => 'id_cat']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_subcat' => 'Id Subcat',
            'id_cat' => 'Id Cat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSubcat()
    {
        return $this->hasOne(Subcategoria::className(), ['id_subcat' => 'id_subcat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCat()
    {
        return $this->hasOne(Categoria::className(), ['id_cat' => 'id_cat']);
    }
}
