<div class="race-header">
	<?php echo(Yii::t('translations','Race').'&nbsp;'.$data->number.'&nbsp;')?>
	<?php echo CHtml::encode($data->title); ?>
	&nbsp;Distancia: <?php echo $data->distance ?>mts.
	&nbsp;Pista: <?php echo $data->lane .', estado '.$data->lane_state ?>
	<?php if( $data->time_enlapsed ):?>
	&nbsp;Tiempo: <?php echo(formatTimeEnlapsed($data->time_enlapsed));?>
	<?php endif;?>
</div>
<?php $this->widget('RaceDetails',
		array(
			'race'        => $data,
			'htmlOptions' => array(
				'class' => 'portlet-container'
			)
		)
);
?>
<?php if( $data->raced ):?>
<?php $this->widget('RaceResults',
		array(
			'race' => $data,
			'htmlOptions' => array(
				'class' => 'portlet-container hide',
			)
		)
);?>
<?php endif;?>