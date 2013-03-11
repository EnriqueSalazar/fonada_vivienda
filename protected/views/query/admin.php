<?php
/* @var $this QueryController */
/* @var $model Query */

$this->breadcrumbs = array(
    'Reunidos' => array('admin'),
    'Buscar',
);

//$this->menu=array(
//	array('label'=>'List Query', 'url'=>array('index')),
//	array('label'=>'Create Query', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#query-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Reunidos Original (filtro de viviendas destruidas)</h1>

<p>
    Puede ingresar una operacion logica (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) al inicio de cada valor para especificar como se realizara la busqueda.
</p>

<?php echo CHtml::link('Busqueda Avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'query-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'htmlOptions'=>array('style'=>'cursor: pointer;'),
'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('query/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
//'selectionChanged'=>"function(id){window.open=('" . Yii::app()->urlManager->createUrl('query/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id),'_new');}",  //intento de que abra en un nuevo target
//'filterOnType' => true,
    'columns' => array(
        //'id',
        'id_bien_afectado',
        'regi_id_registro',
        'Municipio',
        'Departamento',
        //	'dear_id_tipo_bien',
//		'dear_id_estado',
        'nombres_apellidos',
        'numero_documento',
//		'dear_id_parentesco',
//		'dear_id_forma_tenencia',
//		'parentesco',
//		'tenencia',
//        'territorio',
//		'afectacion',
//		'direccion',
//		'nombre_autoriza',
//		'numero_cedula',
//		'tel_1_autoriza',
//		'tel_2_autoriza',
//		'correo_autoriza',
//		'nombre_contacto',
//		'tel_1_contacto',
//		'tel_2_cantacto',
        'nombre_centro_poblado',
        'ubicacion_bien',
//		'dear_id_afectacion',
//		'dear_id_territorio',

//        array(
//            'class' => 'CButtonColumn',
//            'template' => '',
//           // 'template' => '{view}',
//        ),
    ),
));
?>
