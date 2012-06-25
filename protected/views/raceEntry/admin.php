<?php
$this->breadcrumbs=array(
	'Race Entries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RaceEntry', 'url'=>array('index')),
	array('label'=>'Create RaceEntry', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('race-entry-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Race Entries</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'race-entry-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'hipodromo',
		'fecha',
		'carrera',
		'nombre',
		'tipo',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
