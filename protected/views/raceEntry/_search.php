<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hipodromo'); ?>
		<?php echo $form->textField($model,'hipodromo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carrera'); ?>
		<?php echo $form->textField($model,'carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pista'); ?>
		<?php echo $form->textField($model,'pista',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distancia'); ?>
		<?php echo $form->textField($model,'distancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempo'); ?>
		<?php echo $form->textField($model,'tiempo',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orden'); ?>
		<?php echo $form->textField($model,'orden',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forfait'); ?>
		<?php echo $form->textField($model,'forfait'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puesto'); ?>
		<?php echo $form->textField($model,'puesto',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'difere'); ?>
		<?php echo $form->textField($model,'difere',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'divipa'); ?>
		<?php echo $form->textField($model,'divipa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kiloscab'); ?>
		<?php echo $form->textField($model,'kiloscab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kilos'); ?>
		<?php echo $form->textField($model,'kilos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kilosrea'); ?>
		<?php echo $form->textField($model,'kilosrea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tratamient'); ?>
		<?php echo $form->textField($model,'tratamient',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'herraje'); ?>
		<?php echo $form->textField($model,'herraje',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ejemplar'); ?>
		<?php echo $form->textField($model,'ejemplar',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caballer'); ?>
		<?php echo $form->textField($model,'caballer',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuidador'); ?>
		<?php echo $form->textField($model,'cuidador',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jockey'); ?>
		<?php echo $form->textField($model,'jockey',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categojoc'); ?>
		<?php echo $form->textField($model,'categojoc',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capataz'); ?>
		<?php echo $form->textField($model,'capataz',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peon'); ?>
		<?php echo $form->textField($model,'peon',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sereno'); ?>
		<?php echo $form->textField($model,'sereno',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nuejem'); ?>
		<?php echo $form->textField($model,'nuejem',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nucaba'); ?>
		<?php echo $form->textField($model,'nucaba',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nucuid'); ?>
		<?php echo $form->textField($model,'nucuid',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nujock'); ?>
		<?php echo $form->textField($model,'nujock',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nucapa'); ?>
		<?php echo $form->textField($model,'nucapa',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nupeon'); ?>
		<?php echo $form->textField($model,'nupeon',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nusere'); ?>
		<?php echo $form->textField($model,'nusere',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modificado'); ?>
		<?php echo $form->textField($model,'modificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disputada'); ?>
		<?php echo $form->textField($model,'disputada'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->