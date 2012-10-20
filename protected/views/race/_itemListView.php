<div class="race-header">
	<?php echo(Yii::t('translations','Race').'&nbsp;'.$data->number.'&nbsp;')?>
	<?php echo CHtml::encode($data->title); ?>
	&nbsp;Distancia: <?php echo $data->distance ?>mts.
	&nbsp;Pista: <?php echo(laneTypeConvert($data->lane) .', estado '.laneStateConvert($data->lane_state))?>
	<?php if( $data->time_enlapsed ):?>
	&nbsp;Tiempo: <?php echo(formatTimeEnlapsed($data->time_enlapsed));?>
	<?php endif;?>
</div>
<div class="race-data">
<?php if( !$data->raced ):?>
<?php $this->widget('RaceDetails',
		array(
			'race'        => $data,
			'htmlOptions' => array(
				'class' => 'portlet-container'
			)
		)
);
?>
<?php else:?>
<?php $this->widget('RaceDetailsRaced',
		array(
			'race'        => $data,
			'htmlOptions' => array(
				'class' => 'portlet-container detail-raced'
			)
		)
);
?>
<?php $this->widget('RaceResults',
		array(
			'race' => $data,
			'htmlOptions' => array(
				'class' => 'portlet-container hide',
			)
		)
);?>
<?php endif;?>
</div>