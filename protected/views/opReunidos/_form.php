<?php
/* @var $this OpReunidosController */
/* @var $model OpReunidos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'op-reunidos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_bien_afect'); ?>
		<?php echo $form->textField($model,'id_bien_afect'); ?>
		<?php echo $form->error($model,'id_bien_afect'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_registr'); ?>
		<?php echo $form->textField($model,'id_registr'); ?>
		<?php echo $form->error($model,'id_registr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_dane'); ?>
		<?php echo $form->textField($model,'codigo_dane'); ?>
		<?php echo $form->error($model,'codigo_dane'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'depto'); ?>
		<?php echo $form->textField($model,'depto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'depto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mpio'); ?>
		<?php echo $form->textField($model,'mpio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mpio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'det_territ'); ?>
		<?php echo $form->textField($model,'det_territ',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'det_territ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_centro'); ?>
		<?php echo $form->textField($model,'nom_centro',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nom_centro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'det_afecta'); ?>
		<?php echo $form->textField($model,'det_afecta',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'det_afecta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operador'); ?>
		<?php echo $form->textField($model,'operador',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'operador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->