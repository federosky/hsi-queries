<?php
$this->pageTitle = Yii::app()->name . ' - Buscar';
$this->breadcrumbs = array(
	'Buscar informacion',
);
?>
<h1>Search</h1>
<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'.1 Carrera', 'url'=>array('/site/index')),
			array('label'=>'.2 Jockey', 'url'=>array('/site/page', 'view'=>'about')),
			array('label'=>'.3 Caballo', 'url'=>array('/site/contact')),
			//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
	),
)); ?>
<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>