<?php
/* @var $this QueryController */
/* @var $model Query */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'query-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_bien_afectado'); ?>
		<?php echo $form->textField($model,'id_bien_afectado'); ?>
		<?php echo $form->error($model,'id_bien_afectado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regi_id_registro'); ?>
		<?php echo $form->textField($model,'regi_id_registro'); ?>
		<?php echo $form->error($model,'regi_id_registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Municipio'); ?>
		<?php echo $form->textField($model,'Municipio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Departamento'); ?>
		<?php echo $form->textField($model,'Departamento',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dear_id_tipo_bien'); ?>
		<?php echo $form->textField($model,'dear_id_tipo_bien'); ?>
		<?php echo $form->error($model,'dear_id_tipo_bien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dear_id_estado'); ?>
		<?php echo $form->textField($model,'dear_id_estado'); ?>
		<?php echo $form->error($model,'dear_id_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres_apellidos'); ?>
		<?php echo $form->textField($model,'nombres_apellidos',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombres_apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_documento'); ?>
		<?php echo $form->textField($model,'numero_documento'); ?>
		<?php echo $form->error($model,'numero_documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dear_id_parentesco'); ?>
		<?php echo $form->textField($model,'dear_id_parentesco'); ?>
		<?php echo $form->error($model,'dear_id_parentesco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dear_id_forma_tenencia'); ?>
		<?php echo $form->textField($model,'dear_id_forma_tenencia'); ?>
		<?php echo $form->error($model,'dear_id_forma_tenencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parentesco'); ?>
		<?php echo $form->textField($model,'parentesco',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'parentesco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tenencia'); ?>
		<?php echo $form->textField($model,'tenencia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tenencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'territorio'); ?>
		<?php echo $form->textField($model,'territorio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'territorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afectacion'); ?>
		<?php echo $form->textField($model,'afectacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'afectacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_autoriza'); ?>
		<?php echo $form->textField($model,'nombre_autoriza',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_autoriza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_cedula'); ?>
		<?php echo $form->textField($model,'numero_cedula'); ?>
		<?php echo $form->error($model,'numero_cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_1_autoriza'); ?>
		<?php echo $form->textField($model,'tel_1_autoriza'); ?>
		<?php echo $form->error($model,'tel_1_autoriza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_2_autoriza'); ?>
		<?php echo $form->textField($model,'tel_2_autoriza'); ?>
		<?php echo $form->error($model,'tel_2_autoriza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_autoriza'); ?>
		<?php echo $form->textField($model,'correo_autoriza'); ?>
		<?php echo $form->error($model,'correo_autoriza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_contacto'); ?>
		<?php echo $form->textField($model,'nombre_contacto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_1_contacto'); ?>
		<?php echo $form->textField($model,'tel_1_contacto'); ?>
		<?php echo $form->error($model,'tel_1_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_2_cantacto'); ?>
		<?php echo $form->textField($model,'tel_2_cantacto'); ?>
		<?php echo $form->error($model,'tel_2_cantacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_centro_poblado'); ?>
		<?php echo $form->textField($model,'nombre_centro_poblado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_centro_poblado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ubicacion_bien'); ?>
		<?php echo $form->textField($model,'ubicacion_bien',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ubicacion_bien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dear_id_afectacion'); ?>
		<?php echo $form->textField($model,'dear_id_afectacion'); ?>
		<?php echo $form->error($model,'dear_id_afectacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dear_id_territorio'); ?>
		<?php echo $form->textField($model,'dear_id_territorio'); ?>
		<?php echo $form->error($model,'dear_id_territorio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->