<?php
/* @var $this OpReunidosController */
/* @var $model OpReunidos */

$this->breadcrumbs=array(
	'Op Reunidoses'=>array('index'),
	$model->id_bien_afect,
);

$this->menu=array(
	array('label'=>'List OpReunidos', 'url'=>array('index')),
	array('label'=>'Create OpReunidos', 'url'=>array('create')),
	array('label'=>'Update OpReunidos', 'url'=>array('update', 'id'=>$model->id_bien_afect)),
	array('label'=>'Delete OpReunidos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_bien_afect),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OpReunidos', 'url'=>array('admin')),
);
?>

<h1>View OpReunidos #<?php echo $model->id_bien_afect; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_bien_afect',
		'id_registr',
		'codigo_dane',
		'depto',
		'mpio',
		'det_territ',
		'nom_centro',
		'direccion',
		'telefono',
		'det_afecta',
		'operador',
	),
)); ?>
