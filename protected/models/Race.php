<?php

/**
 * This is the model class for table "race".
 *
 * The followings are the available columns in table 'race':
 * @property integer $id
 * @property integer $number
 * @property integer $meeting_id
 * @property string $title
 * @property string $type
 * @property string $lane
 * @property string $lane_state
 * @property integer $distance
 * @property integer $time_enlapsed
 * @property string $createdon
 */
class Race extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Race the static model class
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
		return 'race';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('number, meeting_id, title', 'required'),
			array('number, meeting_id, distance, raced, time_enlapsed', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>256),
			array('type, lane, lane_state', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('number, meeting_id, title, type, lane, lane_state, distance', 'safe', 'on'=>'search'),
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
			'meeting' => array(self::BELONGS_TO, 'Meeting', 'meeting_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'number' => 'Number',
			'meeting_id' => 'Meeting',
			'title' => 'Title',
			'type' => 'Type',
			'lane' => 'Lane',
			'lane_state' => 'Lane State',
			'distance' => 'Distance',
			'raced'    => 'Raced',
			'time_enlapsed' => 'Time enlapsed',
			'createdon' => 'Created on',
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

		$criteria->compare('number',$this->number);
		$criteria->compare('meeting_id',$this->meeting_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('lane',$this->lane,true);
		$criteria->compare('lane_state',$this->lane_state,true);
		$criteria->compare('distance',$this->distance);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}