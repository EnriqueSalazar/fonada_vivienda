<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php
/* @var $this OpViviendasController */
/* @var $model OpViviendas */

$this->breadcrumbs = array(
    'Viviendas' => array('index'),
    ucfirst(Yii::app()->user->Operador),
    'Cargar CSV',
);

//$this->menu=array(
//	array('label'=>'List OpViviendas', 'url'=>array('index')),
//	array('label'=>'Create OpViviendas', 'url'=>array('create')),
//	array('label'=>'View OpViviendas', 'url'=>array('view', 'id'=>$model->id_bien_afec)),
//	array('label'=>'Manage OpViviendas', 'url'=>array('admin')),
//);
//$this->menu = array(
//    array('label' => 'Listar Viviendas', 'url' => array('index')),
//);
//echo Yii::trace(CVarDumper::dumpAsString(yii::app()->user), 'vardump');
if ((strcasecmp(yii::app()->user->Rol, 'member') == 0) or (strcasecmp(yii::app()->user->Rol, 'owner') == 0)) {
    $this->menu[] = array('label' => 'Buscar otra vivienda por datos del bien afectado', 'url' => array('admin'));
    $this->menu[] = array('label' => 'Buscar otra vivienda por miembros del hogar', 'url' => array('opHogares/admin'));
    $this->menu[] =array('label' => 'Cargar hogares por CSV', 'url' => array('opViviendas/startcsvhogares'));
}
?>



<h1><?php echo ucfirst(Yii::app()->user->Operador) ?></h1>

<h2 style="display:inline;">Carga masiva de Viviendas</h2><a title="Haga click sobre el boton rojo para adjuntar sólo un archivo. Arrastre y suelte múltiples archivos sobre este para cargas por lote. Unicamente se permiten archivos CSV. Asegúrese que su archivo tiene la estructura indicada."><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_tooltip.png" alt="<?php echo CHtml::encode($this->pageTitle); ?>"></a><br><br>

<?php
//echo Yii::trace(CVarDumper::dumpAsString($model->id_bien_afec), 'vardump');
//echo Yii::trace(CVarDumper::dumpAsString($this->uniqueid), 'vardump');
//echo Yii::trace(CVarDumper::dumpAsString($this->action->Id), 'vardump');
//$queryvar = "";
//$queryvar.="id_bien_afect=";
//$queryvar.=$model->id_bien_afec;
//echo Yii::trace(CVarDumper::dumpAsString($queryvar), 'vardump');
//echo Yii::app()->basePath;
?>


    <?php
    $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
        'id' => 'uploadFile',
        'config' => array(
            'action' => Yii::app()->createUrl('opViviendas/uploadcsv'),
            'allowedExtensions' => array("csv"),
            'sizeLimit' => 10 * 1024 * 1024,
//        'onSubmit' => 'js:function(file, ext){
//            var id=' . $model->id_bien_afec . ';
//            this.params.id = id;
//        }',
            'messages' => array(
                'typeError' => "{file} tiene una extension invalida. Unicamente las extensiones {extensions} son permitidas.",
                'sizeError' => "{file} es muy grande, el tamaño maximo es {sizeLimit}.",
                'emptyError' => "{file} esta vacio.",
                'onLeave' => "Los archivos estan subiendo, si deja la pagina su carga sera cancelada."
            ),
            'showMessage' => "js:function(message){ alert(message); }"
        )
    ));
    ?>
