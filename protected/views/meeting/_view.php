<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('racetrack')); ?>:</b>
	<?php echo CHtml::encode($data->racetrack); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('race_count')); ?>:</b>
	<?php echo CHtml::encode($data->race_count); ?>
	<br />


</div>