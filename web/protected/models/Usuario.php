<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id_usuario
 * @property string $usuario
 * @property string $correo
 * @property string $nombre_completo
 * @property string $password
 * @property integer $fk_idioma
 * @property integer $fk_pais
 * @property integer $fk_pregunta_secreta
 * @property string $respuesta_secreta
 * @property string $telefono
 * @property string $foto_perfil
 * @property string $imagen_fondo
 * @property boolean $activo
 * @property string $fecha_creacion
 * @property string $sitioweb
 * @property string $biografia
 *
 * The followings are the available model relations:
 * @property Favorito[] $favoritos
 * @property Seguidor[] $seguidors
 * @property Seguidor[] $seguidors1
 * @property Retweet[] $retweets
 * @property Tweet[] $tweets
 * @property Idioma $fkIdioma
 * @property Pais $fkPais
 * @property PreguntaSecreta $fkPreguntaSecreta
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, correo, nombre_completo, password', 'required'),
			array('fk_idioma, fk_pais, fk_pregunta_secreta', 'numerical', 'integerOnly'=>true),
			array('usuario', 'length', 'max'=>30),
			array('correo', 'length', 'max'=>80),
			array('nombre_completo, foto_perfil, imagen_fondo', 'length', 'max'=>100),
			array('password, respuesta_secreta', 'length', 'max'=>256),
			array('telefono', 'length', 'max'=>15),
			array('sitioweb', 'length', 'max'=>60),
			array('biografia', 'length', 'max'=>200),
			array('activo, fecha_creacion', 'safe'),
			array('foto_perfil', 'length', 'max' => 100, 'tooLong' => '{attribute} el nombre del archivo es muy largo (max {max} caracteres).', 'on' => 'insert,upload'),
			array('foto_perfil', 'file', 'types' => 'jpg,jpeg,gif,png', 'allowEmpty'=>true, 'maxSize' => 1024 * 1024 * 2, 'tooLarge' => 'La foto debe ser menor a 2MB !!!', 'on' => 'insert, upload'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usuario, usuario, correo, nombre_completo, password, fk_idioma, fk_pais, fk_pregunta_secreta, respuesta_secreta, telefono, foto_perfil, imagen_fondo, activo, fecha_creacion, sitioweb, biografia', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'favoritos' => array(self::HAS_MANY, 'Favorito', 'usuario'),
			'seguidors' => array(self::HAS_MANY, 'Seguidor', 'seguidor'),
			'seguidors1' => array(self::HAS_MANY, 'Seguidor', 'siguiendo'),
			'retweets' => array(self::HAS_MANY, 'Retweet', 'usuario'),
			'tweets' => array(self::HAS_MANY, 'Tweet', 'usuario'),
			'fkIdioma' => array(self::BELONGS_TO, 'Idioma', 'fk_idioma'),
			'fkPais' => array(self::BELONGS_TO, 'Pais', 'fk_pais'),
			'fkPreguntaSecreta' => array(self::BELONGS_TO, 'PreguntaSecreta', 'fk_pregunta_secreta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'usuario' => 'Usuario',
			'correo' => 'Correo',
			'nombre_completo' => 'Nombre Completo',
			'password' => 'Password',
			'fk_idioma' => 'Fk Idioma',
			'fk_pais' => 'Fk Pais',
			'fk_pregunta_secreta' => 'Fk Pregunta Secreta',
			'respuesta_secreta' => 'Respuesta Secreta',
			'telefono' => 'Telefono',
			'foto_perfil' => 'Foto Perfil',
			'imagen_fondo' => 'Imagen Fondo',
			'activo' => 'Activo',
			'fecha_creacion' => 'Fecha Creacion',
			'sitioweb' => 'Sitioweb',
			'biografia' => 'Biografia',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('nombre_completo',$this->nombre_completo,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('fk_idioma',$this->fk_idioma);
		$criteria->compare('fk_pais',$this->fk_pais);
		$criteria->compare('fk_pregunta_secreta',$this->fk_pregunta_secreta);
		$criteria->compare('respuesta_secreta',$this->respuesta_secreta,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('foto_perfil',$this->foto_perfil,true);
		$criteria->compare('imagen_fondo',$this->imagen_fondo,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('sitioweb',$this->sitioweb,true);
		$criteria->compare('biografia',$this->biografia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
