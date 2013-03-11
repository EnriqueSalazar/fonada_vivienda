<?php
/* @var $this OpReunidosController */
/* @var $model OpReunidos */

$this->breadcrumbs=array(
	'Op Reunidoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OpReunidos', 'url'=>array('index')),
	array('label'=>'Create OpReunidos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#op-reunidos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Op Reunidoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'op-reunidos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_bien_afect',
		'id_registr',
		'codigo_dane',
		'depto',
		'mpio',
		'det_territ',
		/*
		'nom_centro',
		'direccion',
		'telefono',
		'det_afecta',
		'operador',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
