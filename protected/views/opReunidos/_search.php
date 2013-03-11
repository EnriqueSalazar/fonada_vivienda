<?php
/* @var $this OpReunidosController */
/* @var $model OpReunidos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bien_afect'); ?>
		<?php echo $form->textField($model,'id_bien_afect'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_registr'); ?>
		<?php echo $form->textField($model,'id_registr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_dane'); ?>
		<?php echo $form->textField($model,'codigo_dane'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'depto'); ?>
		<?php echo $form->textField($model,'depto',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mpio'); ?>
		<?php echo $form->textField($model,'mpio',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'det_territ'); ?>
		<?php echo $form->textField($model,'det_territ',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_centro'); ?>
		<?php echo $form->textField($model,'nom_centro',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'det_afecta'); ?>
		<?php echo $form->textField($model,'det_afecta',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'operador'); ?>
		<?php echo $form->textField($model,'operador',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->