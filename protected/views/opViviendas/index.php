<?php
/* @var $this OpViviendasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Viviendas',
);

$this->menu=array(
//	array('label'=>'Create OpViviendas', 'url'=>array('create')),
	array('label'=>'Buscar Viviendas', 'url'=>array('admin')),
);
?>

<h1>Viviendas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
