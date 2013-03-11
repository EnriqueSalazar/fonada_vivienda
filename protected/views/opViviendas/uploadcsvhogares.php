<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php
/* @var $this OpViviendasController */
/* @var $model OpViviendas */

$this->breadcrumbs = array(
    'Viviendas' => array('index'),
    ucfirst(Yii::app()->user->Operador),
    'Cargar CSV',
);
if ((strcasecmp(yii::app()->user->Rol, 'member') == 0) or (strcasecmp(yii::app()->user->Rol, 'owner') == 0)) {
    $this->menu[] = array('label' => 'Buscar otra vivienda por datos del bien afectado', 'url' => array('admin'));
    $this->menu[] = array('label' => 'Buscar otra vivienda por miembros del hogar', 'url' => array('opHogares/admin'));
    $this->menu[] = array('label' => 'Cargar viviendas por CSV', 'url' => array('opViviendas/startcsv'));
}
?>



<h1><?php echo ucfirst(Yii::app()->user->Operador) ?></h1>

<h2 style="display:inline;">Carga masiva de Hogares</h2><a title="Haga click sobre el boton rojo para adjuntar sólo un archivo. Arrastre y suelte múltiples archivos sobre este para cargas por lote. Unicamente se permiten archivos CSV. Asegúrese que su archivo tiene la estructura indicada."><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_tooltip.png" alt="<?php echo CHtml::encode($this->pageTitle); ?>"></a><br><br>

    <?php
    $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
        'id' => 'uploadFile',
        'config' => array(
            'action' => Yii::app()->createUrl('opViviendas/uploadcsvhogares'),
            'allowedExtensions' => array("csv"),
            'sizeLimit' => 10 * 1024 * 1024,
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
