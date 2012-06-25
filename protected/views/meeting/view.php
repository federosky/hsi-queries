<?php
$this->breadcrumbs=array(
	Yii::t('translations','View Meetings')=>array('navigate'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Meeting', 'url'=>array('index')),
	array('label'=>'Create Meeting', 'url'=>array('create')),
	array('label'=>'Update Meeting', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Meeting', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Meeting', 'url'=>array('admin')),
);
// no-data
if( !is_numeric($id) )
{
	$this->renderPartial('_no-data', array('id' => $id));
}
else {?>

<h1>View Meeting #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date',
		'racetrack',
		'race_count',
	),
)); ?>
<hr/>

<?php foreach( $model->races as $race ):?>
<?php $this->widget('RaceDetails', array('date' => $model->date, 'race' => $race))?>
<?php endforeach;?>
<?php }?>