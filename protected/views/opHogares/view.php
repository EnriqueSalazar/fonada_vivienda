<?php
/* @var $this OpHogaresController */
/* @var $model OpHogares */

$this->breadcrumbs=array(
	'Op Hogares'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OpHogares', 'url'=>array('index')),
	array('label'=>'Create OpHogares', 'url'=>array('create')),
	array('label'=>'Update OpHogares', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OpHogares', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OpHogares', 'url'=>array('admin')),
);
?>

<h1>View OpHogares #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_bien_afectado',
		'nombres_apellidos',
		'numero_documento',
		'tipo_documento',
		'parentesco',
		'ostenta_tenencia',
		'tipo_tenencia',
		'estado_civil',
		'edad',
		'sexo',
		'ocupacion',
		'ingresos_mensuales',
		'poblacion_especial',
		'observaciones',
		'existe',
	),
)); ?>
