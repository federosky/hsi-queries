<?php
$this->breadcrumbs=array(
	'Race Entries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RaceEntry', 'url'=>array('index')),
	array('label'=>'Create RaceEntry', 'url'=>array('create')),
	array('label'=>'View RaceEntry', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RaceEntry', 'url'=>array('admin')),
);
?>

<h1>Update RaceEntry <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>