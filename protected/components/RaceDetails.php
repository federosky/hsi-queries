<?php
/**
 * 
 */
Yii::import('zii.widgets.CPortlet');

class RaceDetails extends CPortlet
{
	public $date   = null;
	public $race   = null;
	
	/**
	 * (non-PHPdoc)
	 * @see framework/zii/widgets/CPortlet::init()
	 */
	public function init()
	{
		parent::init();
		$this->date = $this->race->meeting->date;
	}
	
	/**
	 * Enter description here ...
	 */
	public function getRaceDetails()
	{
		$criteria = new CDbCriteria();
		$criteria->condition = 'fecha=:meeting_date AND carrera=:race_number';
		$criteria->params = array(':meeting_date' => $this->date, ':race_number' => $this->race->number);
		$criteria->order = 'orden ASC';
		return RaceEntry::model()->findAll($criteria);
	}
	
	/**
	 * (non-PHPdoc)
	 * @see framework/zii/widgets/CPortlet::renderContent()
	 */
	public function renderContent()
	{
		$this->render('raceDetails');
	}
}