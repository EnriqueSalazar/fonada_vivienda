<?php
/* @var $this OpHogaresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Op Hogares',
);

$this->menu=array(
	array('label'=>'Create OpHogares', 'url'=>array('create')),
	array('label'=>'Manage OpHogares', 'url'=>array('admin')),
);
?>

<h1>Op Hogares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
