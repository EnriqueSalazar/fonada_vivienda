<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="galleria/galleria-1.2.9.min.js"></script>
<style>
    #galleria{ width: 700px; height: 400px; background: #FFFFFF }
</style>
<?php
/* @var $this OpViviendasController */
/* @var $model OpViviendas */
$firephp = FirePHP::getInstance(true);

$this->breadcrumbs = array(
    'Viviendas' => array('index'),
    $model->id_bien_afec,
);

//$this->menu=array(
//	array('label'=>'List OpViviendas', 'url'=>array('index')),
//	array('label'=>'Create OpViviendas', 'url'=>array('create')),
//	array('label'=>'Update OpViviendas', 'url'=>array('update', 'id'=>$model->id_bien_afec)),
//	array('label'=>'Delete OpViviendas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_bien_afec),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage OpViviendas', 'url'=>array('admin')),
//);
//$this->menu = array(
//    array('label' => 'Listar Viviendas', 'url' => array('index')),
//);
//echo Yii::trace(CVarDumper::dumpAsString(yii::app()->user), 'vardump');
if ((strcasecmp(yii::app()->user->Rol, 'member') == 0) or (strcasecmp(yii::app()->user->Rol, 'owner') == 0)) {
    $this->menu[] = array('label' => 'Buscar otra vivienda por datos del bien afectado', 'url' => array('admin'));
    $this->menu[] = array('label' => 'Buscar otra vivienda por miembros del hogar ', 'url' => array('opHogares/admin', 'id' => $model->id_bien_afec));
    $this->menu[] = array('label' => 'Editar esta vivienda', 'url' => array('update', 'id' => $model->id_bien_afec));
    $this->menu[] = array('label' => 'Editar miembros de hogar de esta vivienda', 'url' => array('updatehogares', 'id' => $model->id_bien_afec));
}
?>

<h1>Vivienda #<?php echo $model->id_bien_afec; ?></h1>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id_bien_afec',
        'depto',
        'muni',
        'codigodane',
        'ref_catastral',
        'num_viviendas',
        //  'xy_magnasirgas',
        'lat',
        'long',
        'vali_territorio',
        'vali_nomcentro',
        'vali_direccion',
        'verificado',
        'vivienda_destruida',
        'destino_edificacion',
        'vivienda_habitada',
        'donde_vive',
        'dire_residencia_actual',
        'vali_telefono',
        'numero_hogares',
        'fotografias',
        'vivienda_asegurada',
        'vivienda_hipotecada',
        'zona_riesgo',
        'vali_afectacion',
        'elegible',
        'motivo_no_elegible',
        'resolucion_asignacion_fonada',
        'fecha_resolucion_asignada',
        'solucion_vivienda_contratada',
        'solucion_vivienda_ejecucion',
        'modalidad_atencion',
        'tipo_solucion_otorgada',
        'caract_vivienda',
        'valor_solucion_otorgada',
        'num_escritura',
        'fecha_escritura',
        'notaria',
        'matricula_inmobiliaria',
        'fecha_entrega',
        'observaciones',
    ),
));
//echo Yii::trace(CVarDumper::dumpAsString($model->id_bien_afec), 'vardump');
$queryvar = "";
$queryvar.="id_bien_afect=";
$queryvar.=$model->id_bien_afec;
$firephp->log($model, 'OpViviendas $model');
//echo Yii::trace(CVarDumper::dumpAsString($queryvar), 'vardump');
$reunidosparent = OpReunidos::model()->find($queryvar);
if (empty($reunidosparent) == false) {
    echo '<h2>Informacion previamente registrada en Reunidos</h2>';
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $reunidosparent,
        'attributes' => array(
            'id_bien_afect',
            'id_registr',
            'codigo_dane',
            'depto',
            'mpio',
            'det_territ',
            'nom_centro',
            'direccion',
            'telefono',
            'det_afecta',
            'operador',
        ),
    ));
}
//$data = new CActiveDataProvider('OpViviendasFiles');
//$firephp->log($data, 'OpViviendas view $data');
//$fotos= OpViviendasFiles::model()->findAllByAttributes(array('id_bien_afect'=>$model->id_bien_afec), array('select'=>'id_bien_afect, filename'));
//$firephp->log($fotos, 'OpViviendas view $fotos');
//$this->beginWidget('EGalleria');
//
//echo '<ul>';
//    
//foreach ($fotos as $foto){
//    echo '<img src="upload/'.$foto->id_bien_afect.'/'.$foto->filename.'" />';
////    $firephp->log($foto, 'OpViviendas view $foto');
////        $firephp->log($foto->id_bien_afect, 'OpViviendas view $foto id_bien_afect');
////    $firephp->log($foto->filename, 'OpViviendas view $foto filename');
//}
//echo '</ul>';
//
//$this->endWidget();
$docs = OpViviendasDocs::model()->findAllByAttributes(array('id_bien_afect' => $model->id_bien_afec), array('select' => 'filename'));
$firephp->log($docs, 'OpViviendas view $docs');
echo '<br><h2>Pruebas de tenencia</h2>';
foreach ($docs as $doc) {

    $this->widget('zii.widgets.CDetailView', array(
        'data' => $doc,
        'attributes' => array(
//            'filename',
            array('label' => 'Adjunto',
                'type' => 'raw',
                'value' => CHtml::link(CHtml::encode($doc->filename), "upload/" . $model->id_bien_afec . "/docs/" . $doc->filename)),
        ),
    ));
}



$fotos = OpViviendasFiles::model()->findAllByAttributes(array('id_bien_afect' => $model->id_bien_afec), array('select' => 'id_bien_afect, filename'));
$firephp->log($fotos, 'OpViviendas view $fotos');

echo '<br><h2>Archivos adjuntos</h2>';
foreach ($fotos as $foto) {
    if (pathinfo($foto->filename, PATHINFO_EXTENSION) == 'pdf') {
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $foto,
            'attributes' => array(
//            'filename',
                array('label' => 'Adjunto',
                    'type' => 'raw',
                    'value' => CHtml::link(CHtml::encode($foto->filename), "upload/" . $model->id_bien_afec .'/'. $foto->filename)),
            ),
        ));
    }
}
?>
<br><h2>Fotos</h2>
<div id="galleria">
    <?php
    foreach ($fotos as $foto) {
        if (pathinfo($foto->filename, PATHINFO_EXTENSION) == 'jpg') {

            echo '<img src="upload/' . $foto->id_bien_afect . '/' . $foto->filename . '">';
        }
    }
    ?>
</div>
<script>
    Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
    Galleria.run('#galleria');
</script>

