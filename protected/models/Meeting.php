<?php

/**
 * This is the model class for table "meeting".
 *
 * The followings are the available columns in table 'meeting':
 * @property integer $id
 * @property string $date
 * @property string $racetrack
 * @property integer $race_count
 */
class Meeting extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Meeting the static model class
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
		return 'meeting';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, race_count', 'required'),
			array('race_count', 'numerical', 'integerOnly'=>true),
			array('racetrack', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date, racetrack, race_count', 'safe', 'on'=>'search'),
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
			'races' => array(
				self::HAS_MANY,
				'Race',
				'meeting_id',
				'order' => 'races.number ASC'
			)
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('translation','ID'),
			'date' => Yii::t('translation','Date'),
			'racetrack' => Yii::t('translation','Racetrack'),
			'race_count' => Yii::t('translation','Race Count'),
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

		$criteria->compare('id',$this->id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('racetrack',$this->racetrack,true);
		//$criteria->compare('race_count',$this->race_count);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	/**
	 * (non-PHPdoc)
	 * @see framework/CActiveRecord::scopes()
	 * @todo _FS_ Create parameterized scopes
	 */
	public function scopes()
	{
		$current_date = date('Y-m-d');
		return array(
			'previous'  => array(
				'condition' => 'date < "'.$current_date.'"',
				'order'     => 'date DESC',
				'limit'     => 1
			),
			'current'   => array(
				'condition' => 'date = "'.$current_date.'"',
				'limit' => 1
			),
			'next'      => array(
				'condition' => 'date > "'.$current_date.'"',
				'order'     => 'date ASC',
				'limit'     => 1
			),
			'available' => array(
				'condition' => 'date >= "'.$current_date.'"',
				'order'     => 'date ASC'
			)
		);
	}
}