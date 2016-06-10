<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $email
 * @property string $nombre
 * @property string $apellido_p
 * @property string $apellido_m
 * @property string $password
 * @property string $sexo
 * @property string $nacimiento
 *
 * @property Compartir[] $compartirs
 * @property Descuento[] $idDescuentos
 * @property Favorito[] $favoritos
 * @property Descuento[] $idDescuentos0
 * @property HistorialCompartir[] $historialCompartirs
 * @property HistorialDescuento[] $idHistorialDescs
 * @property HistorialFavorito[] $historialFavoritos
 * @property HistorialDescuento[] $idHistorialDescs0
 * @property HistorialRating[] $historialRatings
 * @property Descuento[] $idDescuentos1
 * @property HistorialRecordar[] $historialRecordars
 * @property HistorialDescuento[] $idHistorialDescs1
 * @property Rating[] $ratings
 * @property Descuento[] $idDescuentos2
 * @property Recordar[] $recordars
 * @property Descuento[] $idDescuentos3
 * @property SaveConvenio $saveConvenio
 * @property SaveGusto $saveGusto
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'nombre', 'apellido_p', 'apellido_m', 'password', 'sexo', 'nacimiento'], 'required'],
            [['nacimiento'], 'safe'],
            [['email', 'nombre', 'apellido_p', 'apellido_m', 'password'], 'string', 'max' => 150],
            [['sexo'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'nombre' => 'Nombre',
            'apellido_p' => 'Apellido P',
            'apellido_m' => 'Apellido M',
            'password' => 'Password',
            'sexo' => 'Sexo',
            'nacimiento' => 'Nacimiento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompartirs()
    {
        return $this->hasMany(Compartir::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDescuentos()
    {
        return $this->hasMany(Descuento::className(), ['id_descuento' => 'id_descuento'])->viaTable('compartir', ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavoritos()
    {
        return $this->hasMany(Favorito::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDescuentos0()
    {
        return $this->hasMany(Descuento::className(), ['id_descuento' => 'id_descuento'])->viaTable('favorito', ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialCompartirs()
    {
        return $this->hasMany(HistorialCompartir::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHistorialDescs()
    {
        return $this->hasMany(HistorialDescuento::className(), ['id_historial_desc' => 'id_historial_desc'])->viaTable('historial_compartir', ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialFavoritos()
    {
        return $this->hasMany(HistorialFavorito::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHistorialDescs0()
    {
        return $this->hasMany(HistorialDescuento::className(), ['id_historial_desc' => 'id_historial_desc'])->viaTable('historial_favorito', ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialRatings()
    {
        return $this->hasMany(HistorialRating::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDescuentos1()
    {
        return $this->hasMany(Descuento::className(), ['id_descuento' => 'id_descuento'])->viaTable('historial_rating', ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialRecordars()
    {
        return $this->hasMany(HistorialRecordar::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHistorialDescs1()
    {
        return $this->hasMany(HistorialDescuento::className(), ['id_historial_desc' => 'id_historial_desc'])->viaTable('historial_recordar', ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatings()
    {
        return $this->hasMany(Rating::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDescuentos2()
    {
        return $this->hasMany(Descuento::className(), ['id_descuento' => 'id_descuento'])->viaTable('rating', ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecordars()
    {
        return $this->hasMany(Recordar::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDescuentos3()
    {
        return $this->hasMany(Descuento::className(), ['id_descuento' => 'id_descuento'])->viaTable('recordar', ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaveConvenio()
    {
        return $this->hasOne(SaveConvenio::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaveGusto()
    {
        return $this->hasOne(SaveGusto::className(), ['email' => 'email']);
    }
}
