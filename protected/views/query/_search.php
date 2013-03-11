<?php
/* @var $this QueryController */
/* @var $model Query */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bien_afectado'); ?>
		<?php echo $form->textField($model,'id_bien_afectado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regi_id_registro'); ?>
		<?php echo $form->textField($model,'regi_id_registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Municipio'); ?>
		<?php echo $form->textField($model,'Municipio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Departamento'); ?>
		<?php echo $form->textField($model,'Departamento',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dear_id_tipo_bien'); ?>
		<?php echo $form->textField($model,'dear_id_tipo_bien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dear_id_estado'); ?>
		<?php echo $form->textField($model,'dear_id_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombres_apellidos'); ?>
		<?php echo $form->textField($model,'nombres_apellidos',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_documento'); ?>
		<?php echo $form->textField($model,'numero_documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dear_id_parentesco'); ?>
		<?php echo $form->textField($model,'dear_id_parentesco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dear_id_forma_tenencia'); ?>
		<?php echo $form->textField($model,'dear_id_forma_tenencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentesco'); ?>
		<?php echo $form->textField($model,'parentesco',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tenencia'); ?>
		<?php echo $form->textField($model,'tenencia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'territorio'); ?>
		<?php echo $form->textField($model,'territorio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afectacion'); ?>
		<?php echo $form->textField($model,'afectacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_autoriza'); ?>
		<?php echo $form->textField($model,'nombre_autoriza',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_cedula'); ?>
		<?php echo $form->textField($model,'numero_cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_1_autoriza'); ?>
		<?php echo $form->textField($model,'tel_1_autoriza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_2_autoriza'); ?>
		<?php echo $form->textField($model,'tel_2_autoriza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_autoriza'); ?>
		<?php echo $form->textField($model,'correo_autoriza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_contacto'); ?>
		<?php echo $form->textField($model,'nombre_contacto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_1_contacto'); ?>
		<?php echo $form->textField($model,'tel_1_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_2_cantacto'); ?>
		<?php echo $form->textField($model,'tel_2_cantacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_centro_poblado'); ?>
		<?php echo $form->textField($model,'nombre_centro_poblado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ubicacion_bien'); ?>
		<?php echo $form->textField($model,'ubicacion_bien',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dear_id_afectacion'); ?>
		<?php echo $form->textField($model,'dear_id_afectacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dear_id_territorio'); ?>
		<?php echo $form->textField($model,'dear_id_territorio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->