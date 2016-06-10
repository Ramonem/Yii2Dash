<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historial_descuento".
 *
 * @property integer $id_historial_desc
 * @property integer $id_empresa
 * @property integer $id_historial_camp
 * @property integer $id_subcat
 * @property string $descuento
 * @property string $imagen
 * @property string $vigencia_inicio
 * @property string $vigencia_fin
 * @property string $contacto
 * @property integer $gasto
 * @property string $creado
 *
 * @property HistorialCompartir[] $historialCompartirs
 * @property Usuario[] $emails
 * @property Empresa $idEmpresa
 * @property HistorialCampana $idHistorialCamp
 * @property Subcategoria $idSubcat
 * @property HistorialFavorito[] $historialFavoritos
 * @property Usuario[] $emails0
 * @property HistorialRecordar[] $historialRecordars
 * @property Usuario[] $emails1
 */
class HistorialDescuento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historial_descuento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_empresa', 'id_historial_camp', 'id_subcat', 'gasto'], 'integer'],
            [['vigencia_inicio', 'vigencia_fin', 'creado'], 'safe'],
            [['descuento'], 'string', 'max' => 150],
            [['imagen', 'contacto'], 'string', 'max' => 250],
            [['id_empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['id_empresa' => 'id_empresa']],
            [['id_historial_camp'], 'exist', 'skipOnError' => true, 'targetClass' => HistorialCampana::className(), 'targetAttribute' => ['id_historial_camp' => 'id_historial_camp']],
            [['id_subcat'], 'exist', 'skipOnError' => true, 'targetClass' => Subcategoria::className(), 'targetAttribute' => ['id_subcat' => 'id_subcat']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_historial_desc' => 'Id Historial Desc',
            'id_empresa' => 'Id Empresa',
            'id_historial_camp' => 'Id Historial Camp',
            'id_subcat' => 'Id Subcat',
            'descuento' => 'Descuento',
            'imagen' => 'Imagen',
            'vigencia_inicio' => 'Vigencia Inicio',
            'vigencia_fin' => 'Vigencia Fin',
            'contacto' => 'Contacto',
            'gasto' => 'Gasto',
            'creado' => 'Creado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialCompartirs()
    {
        return $this->hasMany(HistorialCompartir::className(), ['id_historial_desc' => 'id_historial_desc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails()
    {
        return $this->hasMany(Usuario::className(), ['email' => 'email'])->viaTable('historial_compartir', ['id_historial_desc' => 'id_historial_desc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['id_empresa' => 'id_empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHistorialCamp()
    {
        return $this->hasOne(HistorialCampana::className(), ['id_historial_camp' => 'id_historial_camp']);
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
    public function getHistorialFavoritos()
    {
        return $this->hasMany(HistorialFavorito::className(), ['id_historial_desc' => 'id_historial_desc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails0()
    {
        return $this->hasMany(Usuario::className(), ['email' => 'email'])->viaTable('historial_favorito', ['id_historial_desc' => 'id_historial_desc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialRecordars()
    {
        return $this->hasMany(HistorialRecordar::className(), ['id_historial_desc' => 'id_historial_desc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails1()
    {
        return $this->hasMany(Usuario::className(), ['email' => 'email'])->viaTable('historial_recordar', ['id_historial_desc' => 'id_historial_desc']);
    }
}
