<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "descuento".
 *
 * @property integer $id_descuento
 * @property integer $id_empresa
 * @property integer $id_convenio
 * @property integer $id_campana
 * @property integer $id_subcat
 * @property string $nombre
 * @property string $descuento
 * @property string $link
 * @property string $descripcion
 * @property string $imagen
 * @property string $vigencia_inicio
 * @property string $vigencia_fin
 * @property string $contacto
 * @property integer $gasto
 * @property string $creado
 *
 * @property Compartir[] $compartirs
 * @property Usuario[] $emails
 * @property Empresa $idEmpresa
 * @property Campana $idCampana
 * @property Subcategoria $idSubcat
 * @property Convenio $idConvenio
 * @property Favorito[] $favoritos
 * @property Usuario[] $emails0
 * @property HistorialRating[] $historialRatings
 * @property Usuario[] $emails1
 * @property Rating[] $ratings
 * @property Usuario[] $emails2
 * @property Recordar[] $recordars
 * @property Usuario[] $emails3
 * @property UbicacionDescuento[] $ubicacionDescuentos
 * @property Ubicacion[] $idUbicacions
 */
class Descuento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'descuento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_empresa', 'id_convenio', 'id_campana', 'id_subcat', 'nombre', 'descuento', 'link', 'descripcion', 'imagen', 'vigencia_inicio', 'vigencia_fin'], 'required'],
            [['id_empresa', 'id_convenio', 'id_campana', 'id_subcat', 'gasto'], 'integer'],
            [['descripcion'], 'string'],
            [['vigencia_inicio', 'vigencia_fin', 'creado'], 'safe'],
            [['nombre'], 'string', 'max' => 30],
            [['descuento'], 'string', 'max' => 150],
            [['link'], 'string', 'max' => 100],
            [['imagen', 'contacto'], 'string', 'max' => 250],
            [['id_empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['id_empresa' => 'id_empresa']],
            [['id_campana'], 'exist', 'skipOnError' => true, 'targetClass' => Campana::className(), 'targetAttribute' => ['id_campana' => 'id_campana']],
            [['id_subcat'], 'exist', 'skipOnError' => true, 'targetClass' => Subcategoria::className(), 'targetAttribute' => ['id_subcat' => 'id_subcat']],
            [['id_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => Convenio::className(), 'targetAttribute' => ['id_convenio' => 'id_convenio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_descuento' => 'Id Descuento',
            'id_empresa' => 'Empresa',
            'id_convenio' => 'Convenio',
            'id_campana' => 'Campaña',
            'id_subcat' => 'Subcategoria',
            'nombre' => 'Título',
            'descuento' => 'Descuento',
            'link' => 'Link',
            'descripcion' => 'Descripcion',
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
    public function getCompartirs()
    {
        return $this->hasMany(Compartir::className(), ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails()
    {
        return $this->hasMany(Usuario::className(), ['email' => 'email'])->viaTable('compartir', ['id_descuento' => 'id_descuento']);
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
    public function getIdCampana()
    {
        return $this->hasOne(Campana::className(), ['id_campana' => 'id_campana']);
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
    public function getIdConvenio()
    {
        return $this->hasOne(Convenio::className(), ['id_convenio' => 'id_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavoritos()
    {
        return $this->hasMany(Favorito::className(), ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails0()
    {
        return $this->hasMany(Usuario::className(), ['email' => 'email'])->viaTable('favorito', ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialRatings()
    {
        return $this->hasMany(HistorialRating::className(), ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails1()
    {
        return $this->hasMany(Usuario::className(), ['email' => 'email'])->viaTable('historial_rating', ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatings()
    {
        return $this->hasMany(Rating::className(), ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails2()
    {
        return $this->hasMany(Usuario::className(), ['email' => 'email'])->viaTable('rating', ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecordars()
    {
        return $this->hasMany(Recordar::className(), ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails3()
    {
        return $this->hasMany(Usuario::className(), ['email' => 'email'])->viaTable('recordar', ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUbicacionDescuentos()
    {
        return $this->hasMany(UbicacionDescuento::className(), ['id_descuento' => 'id_descuento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUbicacions()
    {
        return $this->hasMany(Ubicacion::className(), ['id_ubicacion' => 'id_ubicacion'])->viaTable('ubicacion_descuento', ['id_descuento' => 'id_descuento']);
    }
}
