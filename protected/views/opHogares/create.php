<?php
/* @var $this OpHogaresController */
/* @var $model OpHogares */

$this->breadcrumbs=array(
	'Op Hogares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OpHogares', 'url'=>array('index')),
	array('label'=>'Manage OpHogares', 'url'=>array('admin')),
);
?>

<h1>Create OpHogares</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>