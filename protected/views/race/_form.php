<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'race-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meeting_id'); ?>
		<?php echo $form->dropDownList($model, 'meeting_id',
			CHtml::listData(Meeting::model()->available()->findAll(), 'id', 'date'),
			array('prompt' => 'Select a Meeting'))?>
		<?php echo $form->error($model,'meeting_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lane'); ?>
		<?php echo $form->textField($model,'lane',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'lane'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lane_state'); ?>
		<?php echo $form->textField($model,'lane_state',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'lane_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distance'); ?>
		<?php echo $form->textField($model,'distance'); ?>
		<?php echo $form->error($model,'distance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->