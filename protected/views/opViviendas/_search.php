<?php
/* @var $this OpViviendasController */
/* @var $model OpViviendas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bien_afec'); ?>
		<?php echo $form->textField($model,'id_bien_afec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ref_catastral'); ?>
		<?php echo $form->textField($model,'ref_catastral'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->label($model,'num_viviendas'); ?>
		<?php echo $form->textField($model,'num_viviendas'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'vali_territorio'); ?>
		<?php echo $form->textField($model,'vali_territorio',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vali_nomcentro'); ?>
		<?php echo $form->textField($model,'vali_nomcentro',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vali_direccion'); ?>
		<?php echo $form->textField($model,'vali_direccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'verificado'); ?>
		<?php echo $form->textField($model,'verificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vivienda_destruida'); ?>
		<?php echo $form->textField($model,'vivienda_destruida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'destino_edificacion'); ?>
		<?php echo $form->textField($model,'destino_edificacion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vivienda_habitada'); ?>
		<?php echo $form->textField($model,'vivienda_habitada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'donde_vive'); ?>
		<?php echo $form->textField($model,'donde_vive',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dire_residencia_actual'); ?>
		<?php echo $form->textField($model,'dire_residencia_actual',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vali_telefono'); ?>
		<?php echo $form->textField($model,'vali_telefono',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_hogares'); ?>
		<?php echo $form->textField($model,'numero_hogares'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vivienda_asegurada'); ?>
		<?php echo $form->textField($model,'vivienda_asegurada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vivienda_hipotecada'); ?>
		<?php echo $form->textField($model,'vivienda_hipotecada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona_riesgo'); ?>
		<?php echo $form->textField($model,'zona_riesgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vali_afectacion'); ?>
		<?php echo $form->textField($model,'vali_afectacion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'elegible'); ?>
		<?php echo $form->textField($model,'elegible'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motivo_no_elegible'); ?>
		<?php echo $form->textField($model,'motivo_no_elegible',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resolucion_asignacion_fonada'); ?>
		<?php echo $form->textField($model,'resolucion_asignacion_fonada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_resolucion_asignada'); ?>
		<?php echo $form->textField($model,'fecha_resolucion_asignada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'solucion_vivienda_contratada'); ?>
		<?php echo $form->textField($model,'solucion_vivienda_contratada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'solucion_vivienda_ejecucion'); ?>
		<?php echo $form->textField($model,'solucion_vivienda_ejecucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modalidad_atencion'); ?>
		<?php echo $form->textField($model,'modalidad_atencion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_solucion_otorgada'); ?>
		<?php echo $form->textField($model,'tipo_solucion_otorgada',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caract_vivienda'); ?>
		<?php echo $form->textField($model,'caract_vivienda',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_solucion_otorgada'); ?>
		<?php echo $form->textField($model,'valor_solucion_otorgada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_escritura'); ?>
		<?php echo $form->textField($model,'num_escritura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_escritura'); ?>
		<?php echo $form->textField($model,'fecha_escritura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notaria'); ?>
		<?php echo $form->textField($model,'notaria',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matricula_inmobiliaria'); ?>
		<?php echo $form->textField($model,'matricula_inmobiliaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_entrega'); ?>
		<?php echo $form->textField($model,'fecha_entrega'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->