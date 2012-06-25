<?php
$this->breadcrumbs=array(
	'Race Entries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RaceEntry', 'url'=>array('index')),
	array('label'=>'Create RaceEntry', 'url'=>array('create')),
	array('label'=>'Update RaceEntry', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RaceEntry', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RaceEntry', 'url'=>array('admin')),
);
?>

<h1>View RaceEntry #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hipodromo',
		'fecha',
		'carrera',
		'nombre',
		'tipo',
		'pista',
		'estado',
		'distancia',
		'tiempo',
		'orden',
		'forfait',
		'puesto',
		'difere',
		'divipa',
		'kiloscab',
		'kilos',
		'kilosrea',
		'tratamient',
		'herraje',
		'ejemplar',
		'caballer',
		'cuidador',
		'jockey',
		'categojoc',
		'capataz',
		'peon',
		'sereno',
		'nuejem',
		'nucaba',
		'nucuid',
		'nujock',
		'nucapa',
		'nupeon',
		'nusere',
		'modificado',
		'disputada',
	),
)); ?>
