<?php
/* @var $this OpReunidosController */
/* @var $data OpReunidos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bien_afect')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bien_afect), array('view', 'id'=>$data->id_bien_afect)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registr')); ?>:</b>
	<?php echo CHtml::encode($data->id_registr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_dane')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_dane); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('depto')); ?>:</b>
	<?php echo CHtml::encode($data->depto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mpio')); ?>:</b>
	<?php echo CHtml::encode($data->mpio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('det_territ')); ?>:</b>
	<?php echo CHtml::encode($data->det_territ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_centro')); ?>:</b>
	<?php echo CHtml::encode($data->nom_centro); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('det_afecta')); ?>:</b>
	<?php echo CHtml::encode($data->det_afecta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operador')); ?>:</b>
	<?php echo CHtml::encode($data->operador); ?>
	<br />

	*/ ?>

</div>