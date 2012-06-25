<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'race-entry-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hipodromo'); ?>
		<?php echo $form->textField($model,'hipodromo',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'hipodromo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php $this->widget(
				'zii.widgets.jui.CJuiDatePicker', 
				array(
					'model' => $model,
					'attribute' => 'fecha',
					'options' => array(
						//'showAnim' => 'fold',
						'dateFormat' => 'yy-mm-dd', 
						'defaultDate' => $model->fecha,
						'defaultDate' => date('Y-m-d'),
						'changeYear' => true,
						'changeMonth' => true,
						'yearRange' => '1900',
				),
		)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carrera'); ?>
		<?php echo $form->textField($model,'carrera'); ?>
		<?php echo $form->error($model,'carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pista'); ?>
		<?php echo $form->textField($model,'pista',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'pista'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distancia'); ?>
		<?php echo $form->textField($model,'distancia'); ?>
		<?php echo $form->error($model,'distancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempo'); ?>
		<?php echo $form->textField($model,'tiempo',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'tiempo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orden'); ?>
		<?php echo $form->textField($model,'orden',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'orden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forfait'); ?>
		<?php echo $form->textField($model,'forfait'); ?>
		<?php echo $form->error($model,'forfait'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'puesto'); ?>
		<?php echo $form->textField($model,'puesto',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'puesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'difere'); ?>
		<?php echo $form->textField($model,'difere',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'difere'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'divipa'); ?>
		<?php echo $form->textField($model,'divipa'); ?>
		<?php echo $form->error($model,'divipa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kiloscab'); ?>
		<?php echo $form->textField($model,'kiloscab'); ?>
		<?php echo $form->error($model,'kiloscab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kilos'); ?>
		<?php echo $form->textField($model,'kilos'); ?>
		<?php echo $form->error($model,'kilos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kilosrea'); ?>
		<?php echo $form->textField($model,'kilosrea'); ?>
		<?php echo $form->error($model,'kilosrea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tratamient'); ?>
		<?php echo $form->textField($model,'tratamient',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'tratamient'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'herraje'); ?>
		<?php echo $form->textField($model,'herraje',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'herraje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ejemplar'); ?>
		<?php echo $form->textField($model,'ejemplar',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'ejemplar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caballer'); ?>
		<?php echo $form->textField($model,'caballer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'caballer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuidador'); ?>
		<?php echo $form->textField($model,'cuidador',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cuidador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jockey'); ?>
		<?php echo $form->textField($model,'jockey',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'jockey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categojoc'); ?>
		<?php echo $form->textField($model,'categojoc',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'categojoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capataz'); ?>
		<?php echo $form->textField($model,'capataz',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'capataz'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peon'); ?>
		<?php echo $form->textField($model,'peon',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'peon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sereno'); ?>
		<?php echo $form->textField($model,'sereno',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'sereno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nuejem'); ?>
		<?php echo $form->textField($model,'nuejem',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nuejem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nucaba'); ?>
		<?php echo $form->textField($model,'nucaba',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nucaba'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nucuid'); ?>
		<?php echo $form->textField($model,'nucuid',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nucuid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nujock'); ?>
		<?php echo $form->textField($model,'nujock',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nujock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nucapa'); ?>
		<?php echo $form->textField($model,'nucapa',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nucapa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nupeon'); ?>
		<?php echo $form->textField($model,'nupeon',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nupeon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nusere'); ?>
		<?php echo $form->textField($model,'nusere',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nusere'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modificado'); ?>
		<?php echo $form->textField($model,'modificado'); ?>
		<?php echo $form->error($model,'modificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disputada'); ?>
		<?php echo $form->textField($model,'disputada'); ?>
		<?php echo $form->error($model,'disputada'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->