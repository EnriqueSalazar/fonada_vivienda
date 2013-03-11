<?php
/* @var $this OpHogaresController */
/* @var $data OpHogares */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bien_afectado')); ?>:</b>
	<?php echo CHtml::encode($data->id_bien_afectado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->nombres_apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_documento')); ?>:</b>
	<?php echo CHtml::encode($data->numero_documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_documento')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentesco')); ?>:</b>
	<?php echo CHtml::encode($data->parentesco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ostenta_tenencia')); ?>:</b>
	<?php echo CHtml::encode($data->ostenta_tenencia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_tenencia')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_tenencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($data->edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ingresos_mensuales')); ?>:</b>
	<?php echo CHtml::encode($data->ingresos_mensuales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poblacion_especial')); ?>:</b>
	<?php echo CHtml::encode($data->poblacion_especial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('existe')); ?>:</b>
	<?php echo CHtml::encode($data->existe); ?>
	<br />

	*/ ?>

</div>