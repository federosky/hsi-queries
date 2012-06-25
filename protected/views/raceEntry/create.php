<?php
$this->breadcrumbs=array(
	'Race Entries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RaceEntry', 'url'=>array('index')),
	array('label'=>'Manage RaceEntry', 'url'=>array('admin')),
);
?>

<h1>Create RaceEntry</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>