<?php
$this->breadcrumbs=array(
	'Races'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Race', 'url'=>array('index')),
	array('label'=>'Create Race', 'url'=>array('create')),
	array('label'=>'Update Race', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Race', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Race', 'url'=>array('admin')),
);
?>

<h1>View Race #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'number',
		'meeting_id',
		'title',
		'type',
		'lane',
		'lane_state',
		'distance',
		'createdon',
	),
)); ?>
