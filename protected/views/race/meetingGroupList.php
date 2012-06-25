<?php
$this->pageTitle = Yii::app()->name . ' - '.Yii::t('translations','Current Meeting');
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/assets/js/race-detail-result-list.controller.js');
$cs->registerScriptFile($baseUrl.'/assets/js/jquery.ba-dotimeout.js');
$cs->registerScriptFile($baseUrl.'/assets/js/jquery.easyscroll.js');
/**
 * @todo Review breadcrumb link text
 */
Yii::import('ext.web.widgets.pagers.CCustomLinkPager');
$this->breadcrumbs = array(
	Yii::t('translations','View Meetings') => array('meeting/navigate'),
	Yii::t('translations','Reunión del día '.date('d-m-Y',strtotime($meeting->date))),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_itemListView',
	'id' => 'listContainer',
	'pager' => array(
		'class' => 'CCustomLinkPager',
		'enableActionButton' => true,
	),
	'afterAjaxUpdate' => 'Content.init',
	'template' => '{items}{pager}'
)); ?>
