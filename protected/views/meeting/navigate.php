<?php
$this->pageTitle = Yii::app()->name . ' - '.Yii::t('translations','View Meetings');
$this->breadcrumbs = array(
	Yii::t('translations','View Meetings'),
);
$this->widget('zii.widgets.CMenu',array(
	'htmlOptions' => array(
		'class' => 'navigation-menu'
	),
	'encodeLabel' => false,
	'items' => array(
		array(
			'label' => CHtml::image('images/nav-meeting-previous-comingsoon.png', '.1 Previous meeting'),
		    //'url' => array('meeting/view', 'id' => $previous),
			'linkOptions' => array('class' => 'nav-search'),
		),
		array(
			'label' => CHtml::image('images/nav-meeting-current.png', '.2 Current meeting'),
			'url' => array('race/currentMeetingList'), //'id' => $current),
			'linkOptions' => array('class' => 'nav-view')
		),
		array(
			'label' => CHtml::image('images/nav-meeting-next-comingsoon.png', '.3 Next meeting'),
			//'url' => array('meeting/view', 'id' => $next),
			'linkOptions' => array('class' => 'nav-news')
		)
	)
)); ?>