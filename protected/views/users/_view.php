<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operador')); ?>:</b>
	<?php echo CHtml::encode($data->operador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastlogin')); ?>:</b>
	<?php echo CHtml::encode($data->lastlogin); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('creado')); ?>:</b>
	<?php echo CHtml::encode($data->creado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actualizado')); ?>:</b>
	<?php echo CHtml::encode($data->actualizado); ?>
	<br />

	*/ ?>

</div>