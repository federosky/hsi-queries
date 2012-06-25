<?php

/**
 * This is the model class for table "carreras".
 *
 * The followings are the available columns in table 'carreras':
 * @property string $id
 * @property string $hipodromo
 * @property string $fecha
 * @property integer $carrera
 * @property string $nombre
 * @property string $tipo
 * @property string $pista
 * @property string $estado
 * @property integer $distancia
 * @property string $tiempo
 * @property string $orden
 * @property integer $forfait
 * @property string $puesto
 * @property string $difere
 * @property double $divipa
 * @property double $kiloscab
 * @property double $kilos
 * @property double $kilosrea
 * @property string $tratamient
 * @property string $herraje
 * @property string $ejemplar
 * @property string $caballer
 * @property string $cuidador
 * @property string $jockey
 * @property string $categojoc
 * @property string $capataz
 * @property string $peon
 * @property string $sereno
 * @property string $nuejem
 * @property string $nucaba
 * @property string $nucuid
 * @property string $nujock
 * @property string $nucapa
 * @property string $nupeon
 * @property string $nusere
 * @property string $modificado
 * @property integer $disputada
 */
class RaceEntry extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return RaceEntry the static model class
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
		return 'carreras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, nombre, tipo, pista, estado, distancia, orden, forfait, puesto, difere, divipa, kiloscab, kilos, kilosrea, tratamient, herraje, ejemplar, caballer, cuidador, jockey, categojoc, capataz, peon, sereno, nuejem, nucaba, nucuid, nujock, nucapa, nupeon, nusere, modificado', 'required'),
			array('carrera, distancia, forfait, disputada', 'numerical', 'integerOnly'=>true),
			array('divipa, kiloscab, kilos, kilosrea', 'numerical'),
			array('hipodromo, tipo, estado, categojoc', 'length', 'max'=>8),
			array('nombre, ejemplar, cuidador, jockey, capataz, peon, sereno, nuejem, nucaba, nucuid, nujock, nucapa, nupeon, nusere', 'length', 'max'=>128),
			array('pista, tiempo', 'length', 'max'=>16),
			array('orden', 'length', 'max'=>4),
			array('puesto', 'length', 'max'=>32),
			array('difere, caballer', 'length', 'max'=>255),
			array('tratamient, herraje', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, hipodromo, fecha, carrera, nombre, tipo, pista, estado, distancia, tiempo, orden, forfait, puesto, difere, divipa, kiloscab, kilos, kilosrea, tratamient, herraje, ejemplar, caballer, cuidador, jockey, categojoc, capataz, peon, sereno, nuejem, nucaba, nucuid, nujock, nucapa, nupeon, nusere, modificado, disputada', 'safe', 'on'=>'search'),
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
			'hipodromo' => 'Hipodromo',
			'fecha' => 'Fecha',
			'carrera' => 'Carrera',
			'nombre' => 'Nombre',
			'tipo' => 'Tipo',
			'pista' => 'Pista',
			'estado' => 'Estado',
			'distancia' => 'Distancia',
			'tiempo' => 'Tiempo',
			'orden' => 'Orden',
			'forfait' => 'Forfait',
			'puesto' => 'Puesto',
			'difere' => 'Difere',
			'divipa' => 'Divipa',
			'kiloscab' => 'Kiloscab',
			'kilos' => 'Kilos',
			'kilosrea' => 'Kilosrea',
			'tratamient' => 'Tratamient',
			'herraje' => 'Herraje',
			'ejemplar' => 'Ejemplar',
			'caballer' => 'Caballer',
			'cuidador' => 'Cuidador',
			'jockey' => 'Jockey',
			'categojoc' => 'Categojoc',
			'capataz' => 'Capataz',
			'peon' => 'Peon',
			'sereno' => 'Sereno',
			'nuejem' => 'Nuejem',
			'nucaba' => 'Nucaba',
			'nucuid' => 'Nucuid',
			'nujock' => 'Nujock',
			'nucapa' => 'Nucapa',
			'nupeon' => 'Nupeon',
			'nusere' => 'Nusere',
			'modificado' => 'Modificado',
			'disputada' => 'Disputada',
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
		$criteria->compare('hipodromo',$this->hipodromo,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('carrera',$this->carrera);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('pista',$this->pista,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('distancia',$this->distancia);
		$criteria->compare('tiempo',$this->tiempo,true);
		$criteria->compare('orden',$this->orden,true);
		$criteria->compare('forfait',$this->forfait);
		$criteria->compare('puesto',$this->puesto,true);
		$criteria->compare('difere',$this->difere,true);
		$criteria->compare('divipa',$this->divipa);
		$criteria->compare('kiloscab',$this->kiloscab);
		$criteria->compare('kilos',$this->kilos);
		$criteria->compare('kilosrea',$this->kilosrea);
		$criteria->compare('tratamient',$this->tratamient,true);
		$criteria->compare('herraje',$this->herraje,true);
		$criteria->compare('ejemplar',$this->ejemplar,true);
		$criteria->compare('caballer',$this->caballer,true);
		$criteria->compare('cuidador',$this->cuidador,true);
		$criteria->compare('jockey',$this->jockey,true);
		$criteria->compare('categojoc',$this->categojoc,true);
		$criteria->compare('capataz',$this->capataz,true);
		$criteria->compare('peon',$this->peon,true);
		$criteria->compare('sereno',$this->sereno,true);
		$criteria->compare('nuejem',$this->nuejem,true);
		$criteria->compare('nucaba',$this->nucaba,true);
		$criteria->compare('nucuid',$this->nucuid,true);
		$criteria->compare('nujock',$this->nujock,true);
		$criteria->compare('nucapa',$this->nucapa,true);
		$criteria->compare('nupeon',$this->nupeon,true);
		$criteria->compare('nusere',$this->nusere,true);
		$criteria->compare('modificado',$this->modificado,true);
		$criteria->compare('disputada',$this->disputada);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	public function getRaceEntries($data)
	{
		$criteria = new CDbCriteria();
		foreach ($data as $key => $value)
		{
			$criteria->compare($key, $value);
		}

		return $this->findAll($criteria);
	}
}