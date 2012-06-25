<?php

/**
 * This is the model class for table "dividendos".
 *
 * The followings are the available columns in table 'dividendos':
 * @property string $id
 * @property string $fecha
 * @property string $hipodromo
 * @property integer $carrera
 * @property string $nombre
 * @property string $ordenes
 * @property double $importe
 * @property string $descripcio
 * @property string $modificado
 */
class ResultEntry extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return RaceResultEntry the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dividendos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, carrera, nombre, ordenes, importe, descripcio, modificado', 'required'),
			array('carrera', 'numerical', 'integerOnly'=>true),
			array('importe', 'numerical'),
			array('hipodromo', 'length', 'max'=>8),
			array('nombre, descripcio', 'length', 'max'=>128),
			array('ordenes', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fecha, hipodromo, carrera, nombre, ordenes, importe, descripcio, modificado', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'hipodromo' => 'Hipodromo',
			'carrera' => 'Carrera',
			'nombre' => 'Nombre',
			'ordenes' => 'Ordenes',
			'importe' => 'Importe',
			'descripcio' => 'Descripcio',
			'modificado' => 'Modificado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hipodromo',$this->hipodromo,true);
		$criteria->compare('carrera',$this->carrera);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ordenes',$this->ordenes,true);
		$criteria->compare('importe',$this->importe);
		$criteria->compare('descripcio',$this->descripcio,true);
		$criteria->compare('modificado',$this->modificado,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}