<?php
/* @var $this OpReunidosController */
/* @var $model OpReunidos */

$this->breadcrumbs=array(
	'Op Reunidoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OpReunidos', 'url'=>array('index')),
	array('label'=>'Manage OpReunidos', 'url'=>array('admin')),
);
?>

<h1>Create OpReunidos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>