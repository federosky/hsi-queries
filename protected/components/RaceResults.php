<?php
/**
 * 
 */
Yii::import('zii.widgets.CPortlet');

class RaceResults extends CPortlet
{
	public $title;
	public $date;
	public $race;
	
	public function init()
	{
		parent::init();
		$this->date = $this->race->meeting->date;
	}
	
	public function getRaceResults()
	{
		return ResultEntry::model()->findAllByAttributes(
			array(
				'fecha' => $this->date,
				'carrera' => $this->race->number
			)
		);
	}
	
	public function getRaceEntries()
	{
		$criteria = new CDbCriteria;
		$criteria->select = 'orden, puesto, difere, divipa';
		$criteria->condition = 'fecha=:meeting_date AND carrera=:race_number';
		$criteria->params = array(':meeting_date' => $this->date, ':race_number' => $this->race->number);
		$criteria->order = 'puesto';
		$criteria->limit = 6;
		$criteria->addInCondition('puesto', array(1,2,3,4,5,6));
		
		return RaceEntry::model()->findAll($criteria);
	}
	
	public function renderContent()
	{
		$this->render(
			'raceResults',
			array(
				'raceEntries' => $this->getRaceEntries(),
				'results'     => $this->getRaceResults()
			)
		);
	}
}