<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subcategoria".
 *
 * @property integer $id_subcat
 * @property string $nombre_subcat
 *
 * @property Descuento[] $descuentos
 * @property EnlaceCat[] $enlaceCats
 * @property Categoria[] $idCats
 * @property HistorialDescuento[] $historialDescuentos
 */
class Subcategoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subcategoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_subcat'], 'required'],
            [['nombre_subcat'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_subcat' => 'Id subcategoria',
            'nombre_subcat' => 'Nombre subcategoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDescuentos()
    {
        return $this->hasMany(Descuento::className(), ['id_subcat' => 'id_subcat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnlaceCats()
    {
        return $this->hasMany(EnlaceCat::className(), ['id_subcat' => 'id_subcat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCats()
    {
        return $this->hasMany(Categoria::className(), ['id_cat' => 'id_cat'])->viaTable('enlace_cat', ['id_subcat' => 'id_subcat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialDescuentos()
    {
        return $this->hasMany(HistorialDescuento::className(), ['id_subcat' => 'id_subcat']);
    }
}
