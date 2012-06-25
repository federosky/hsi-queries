<?php
$this->breadcrumbs=array(
	'Races'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Race', 'url'=>array('index')),
	array('label'=>'Manage Race', 'url'=>array('admin')),
);
?>

<h1>Create Race</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>