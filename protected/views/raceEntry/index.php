<?php
$this->breadcrumbs=array(
	'Race Entries',
);

$this->menu=array(
	array('label'=>'Create RaceEntry', 'url'=>array('create')),
	array('label'=>'Manage RaceEntry', 'url'=>array('admin')),
);
?>

<h1>Race Entries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
