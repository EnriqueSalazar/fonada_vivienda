<?php
/* @var $this opViviendasController */
/* @var $model opViviendas */

$this->breadcrumbs = array(
    'Viviendas' => array('index'),
    'Buscar Vivienda',
);

$this->menu = array(
//    array('label' => 'Listar Viviendas', 'url' => array('index')),
//	array('label'=>'Create opViviendas', 'url'=>array('create')),
    array('label' => 'Buscar vivienda por miembros del hogar', 'url' => array('opHogares/admin')),
    array('label' => 'Cargar viviendas por CSV', 'url' => array('opViviendas/startcsv')),
    array('label' => 'Cargar hogares por CSV', 'url' => array('opViviendas/startcsvhogares')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#op-viviendas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar Viviendas</h1>
<h2>por datos del bien afectado</h2>

<p>
    Ingrese un valor en cada campo para realizar la búsqueda.
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
    'id' => 'op-viviendas-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_bien_afec',
        'depto',
        'muni',
//		'ref_catastral',
//		'ref_mejora',
//		'xy_magnasirgas',
//		'vali_territorio',
//        'vali_nomcentro',
//		'vali_direccion',
        'verificado',
//        'vivienda_destruida',
//        'destino_edificacion',
//        'vivienda_habitada',
//		'donde_vive',
//		'dire_residencia_actual',
//		'vali_telefono',
//		'numero_hogares',
//		'fotografias',
//		'vivienda_asegurada',
//		'vivienda_hipotecada',
//		'zona_riesgo',
//		'vali_afectacion',
        'elegible',
//		'motivo_no_elegible',
//		'resolucion_asignacion_fonada',
//		'fecha_resolucion_asignada',
//		'solucion_vivienda_contratada',
//		'solucion_vivienda_ejecucion',
//		'modalidad_atencion',
//		'tipo_solucion_otorgada',
//		'caract_vivienda',
//		'valor_solucion_otorgada',
//		'num_escritura',
//		'fecha_escritura',
//		'notaria',
//		'matricula_inmobiliaria',
//		'fecha_entrega',
//		'observaciones',
        'operador',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{hogares}',
            'buttons' => array(
                'view' => array(
                    'label' => 'Ver Vivienda'
                ),
                'update' => array(
                    'label' => 'Editar Vivienda',
                    'imageUrl' => 'images/update.png', // image URL of the button. If not set or false, a text link is used
                ),
                'hogares' => array(
                    'label' => 'Hogar', // text label of the button
                    'url' => "CHtml::normalizeUrl(array('opViviendas/updatehogares', 'id'=>\$data->id_bien_afec))",
                    //'url' => 'Yii::app()->createUrl("/opViviendas/updatehogares", array("id"=>$data->id))',
                    'imageUrl' => 'images/update_hogares.png', // image URL of the button. If not set or false, a text link is used
                    'options' => array('class' => 'hogares'), // HTML options for the button
                ),
            ),
        ),
    ),
));
?>
