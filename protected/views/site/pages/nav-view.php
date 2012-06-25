<?php
$this->pageTitle = Yii::app()->name . ' - Buscar';
$this->breadcrumbs = array(
	'Visualizar reuniones',
);
?>
<h1>View</h1>
<?php
$this->widget('zii.widgets.CMenu',array(
	'items' => array(
		array('label' => '.1 Previous meetings', 'url' => array('/meeting/previous')),
		array('label' => '.2 Current meeting',  'url' => array('/meeting/index', 'view'=>'about')),
		array('label' => '.3 Next meetings', 'url' => array('/meeting/next')),
	),
)); ?>
<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>