<?php
/* @var $this OpReunidosController */
/* @var $model OpReunidos */

$this->breadcrumbs=array(
	'Op Reunidoses'=>array('index'),
	$model->id_bien_afect=>array('view','id'=>$model->id_bien_afect),
	'Update',
);

$this->menu=array(
	array('label'=>'List OpReunidos', 'url'=>array('index')),
	array('label'=>'Create OpReunidos', 'url'=>array('create')),
	array('label'=>'View OpReunidos', 'url'=>array('view', 'id'=>$model->id_bien_afect)),
	array('label'=>'Manage OpReunidos', 'url'=>array('admin')),
);
?>

<h1>Update OpReunidos <?php echo $model->id_bien_afect; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>