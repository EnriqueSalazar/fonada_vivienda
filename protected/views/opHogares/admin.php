<?php
/* @var $this OpHogaresController */
/* @var $model OpHogares */

$this->breadcrumbs = array(
    'Viviendas' => array('opViviendas/admin'),
    'Buscar Vivienda',
);

$this->menu = array(
//	array('label'=>'List OpHogares', 'url'=>array('index')),
//	array('label'=>'Create OpHogares', 'url'=>array('create')),
    array('label' => 'Buscar vivienda por datos del bien afectado', 'url' => array('opViviendas/admin')),
    array('label' => 'Cargar viviendas por CSV', 'url' => array('opViviendas/startcsv')),
    array('label' => 'Cargar hogares por CSV', 'url' => array('opViviendas/startcsvhogares')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#op-hogares-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar Viviendas</h1>
<h2>por miembros del hogar</h2>
<p>
    Ingrese un valor en cada campo para realizar la búsqueda.

</p>

<?php // echo CHtml::link('Advanced Search', '#', array('class' => 'search-button'));  ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'op-hogares-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
//		'id',
        'id_bien_afectado',
//        'nombres_apellidos',
        'apellido1',
        'apellido2',
        'nombre1',
        'nombre2',
        'numero_documento',
//		'tipo_documento',
//		'parentesco',
        /*
          'ostenta_tenencia',
          'tipo_tenencia',
          'estado_civil',
          'edad',
          'sexo',
          'ocupacion',
          'ingresos_mensuales',
          'poblacion_especial',
          'observaciones',
          'existe',
         */
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{hogares}',
            'buttons' => array(
                'view' => array(
                    'label' => 'Ver Vivienda',
                    'url' => "CHtml::normalizeUrl(array('opViviendas/view', 'id'=>\$data->id_bien_afectado))",
                ),
                'update' => array(
                    'label' => 'Editar Vivienda',
                    'url' => "CHtml::normalizeUrl(array('opViviendas/update', 'id'=>\$data->id_bien_afectado))",
                    'imageUrl' => 'images/update.png', // image  URL of the button. If not set or false, a text link is used
                ),
                'hogares' => array(
                    'label' => 'Hogar', // text label of the button
                    'url' => "CHtml::normalizeUrl(array('opViviendas/updatehogares', 'id'=>\$data->id_bien_afectado))",
                    //'url' => 'Yii::app()->createUrl("/opViviendas/updatehogares", array("id"=>$data->id))',
                    'imageUrl' => 'images/update_hogares.png', // image URL of the button. If not set or false, a text link is used
                    'options' => array('class' => 'hogares'), // HTML options for the button
                ),
            ),
        ),
    ),
));
?>
