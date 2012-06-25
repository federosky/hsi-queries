<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'meeting-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php $this->widget(
				'zii.widgets.jui.CJuiDatePicker', 
				array(
					'model' => $model,
					'attribute' => 'date',
					'options' => array(
						//'showAnim' => 'fold',
						'dateFormat' => 'yy-mm-dd', 
						'defaultDate' => $model->date,
						'defaultDate' => date('Y-m-d'),
						'changeYear' => true,
						'changeMonth' => true,
						'yearRange' => '1900',
				),
		)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'racetrack'); ?>
		<?php echo $form->textField($model,'racetrack',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'racetrack'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'race_count'); ?>
		<?php echo $form->textField($model,'race_count'); ?>
		<?php echo $form->error($model,'race_count'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->