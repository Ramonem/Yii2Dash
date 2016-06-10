<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property integer $id_cat
 * @property string $nombre_cat
 *
 * @property EnlaceCat[] $enlaceCats
 * @property Subcategoria[] $idSubcats
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_cat'], 'required'],
            [['nombre_cat'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cat' => 'Id Cat',
            'nombre_cat' => 'Nombre Cat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnlaceCats()
    {
        return $this->hasMany(EnlaceCat::className(), ['id_cat' => 'id_cat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSubcats()
    {
        return $this->hasMany(Subcategoria::className(), ['id_subcat' => 'id_subcat'])->viaTable('enlace_cat', ['id_cat' => 'id_cat']);
    }
}
