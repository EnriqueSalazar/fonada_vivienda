<?php
/* @var $this OpViviendasController */
/* @var $model OpViviendas */

$this->breadcrumbs=array(
	'Viviendas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Viviendas', 'url'=>array('index')),
	array('label'=>'Buscar Viviendas', 'url'=>array('admin')),
);
?>

<h1>Crear Viviendas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>