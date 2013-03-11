<?php
/* @var $this OpReunidosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Op Reunidoses',
);

$this->menu=array(
	array('label'=>'Create OpReunidos', 'url'=>array('create')),
	array('label'=>'Manage OpReunidos', 'url'=>array('admin')),
);
?>

<h1>Op Reunidoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
