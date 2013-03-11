<?php
/* @var $this QueryController */
/* @var $model Query */

$this->breadcrumbs=array(
	'Reunidos'=>array('admin'),
	$model->id_bien_afectado,
);

$this->menu=array(
//	array('label'=>'List Query', 'url'=>array('index')),
//	array('label'=>'Create Query', 'url'=>array('create')),
//	array('label'=>'Update Query', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Query', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar Vivienda', 'url'=>array('admin')),
);
?>

<h1>Vivienda #<?php echo $model->id_bien_afectado; ?></h1>
<h2>Registro original en Reunidos</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
		'id_bien_afectado',
		'regi_id_registro',
		'Municipio',
		'Departamento',
		'dear_id_tipo_bien',
		'dear_id_estado',
		'nombres_apellidos',
		'numero_documento',
		'dear_id_parentesco',
		'dear_id_forma_tenencia',
		'parentesco',
		'tenencia',
		'territorio',
		'afectacion',
		'direccion',
		'nombre_autoriza',
		'numero_cedula',
		'tel_1_autoriza',
		'tel_2_autoriza',
		'correo_autoriza',
		'nombre_contacto',
		'tel_1_contacto',
		'tel_2_cantacto',
		'nombre_centro_poblado',
		'ubicacion_bien',
		'dear_id_afectacion',
		'dear_id_territorio',
	),
)); ?>
