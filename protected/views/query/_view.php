<?php
/* @var $this QueryController */
/* @var $data Query */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bien_afectado')); ?>:</b>
	<?php echo CHtml::encode($data->id_bien_afectado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regi_id_registro')); ?>:</b>
	<?php echo CHtml::encode($data->regi_id_registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Municipio')); ?>:</b>
	<?php echo CHtml::encode($data->Municipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Departamento')); ?>:</b>
	<?php echo CHtml::encode($data->Departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dear_id_tipo_bien')); ?>:</b>
	<?php echo CHtml::encode($data->dear_id_tipo_bien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dear_id_estado')); ?>:</b>
	<?php echo CHtml::encode($data->dear_id_estado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->nombres_apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_documento')); ?>:</b>
	<?php echo CHtml::encode($data->numero_documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dear_id_parentesco')); ?>:</b>
	<?php echo CHtml::encode($data->dear_id_parentesco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dear_id_forma_tenencia')); ?>:</b>
	<?php echo CHtml::encode($data->dear_id_forma_tenencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentesco')); ?>:</b>
	<?php echo CHtml::encode($data->parentesco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenencia')); ?>:</b>
	<?php echo CHtml::encode($data->tenencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('territorio')); ?>:</b>
	<?php echo CHtml::encode($data->territorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afectacion')); ?>:</b>
	<?php echo CHtml::encode($data->afectacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_autoriza')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_autoriza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_cedula')); ?>:</b>
	<?php echo CHtml::encode($data->numero_cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_1_autoriza')); ?>:</b>
	<?php echo CHtml::encode($data->tel_1_autoriza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_2_autoriza')); ?>:</b>
	<?php echo CHtml::encode($data->tel_2_autoriza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo_autoriza')); ?>:</b>
	<?php echo CHtml::encode($data->correo_autoriza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_1_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->tel_1_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_2_cantacto')); ?>:</b>
	<?php echo CHtml::encode($data->tel_2_cantacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_centro_poblado')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_centro_poblado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ubicacion_bien')); ?>:</b>
	<?php echo CHtml::encode($data->ubicacion_bien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dear_id_afectacion')); ?>:</b>
	<?php echo CHtml::encode($data->dear_id_afectacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dear_id_territorio')); ?>:</b>
	<?php echo CHtml::encode($data->dear_id_territorio); ?>
	<br />

	*/ ?>

</div>