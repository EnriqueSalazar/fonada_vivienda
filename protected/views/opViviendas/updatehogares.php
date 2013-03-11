<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php
/* @var $this OpViviendasController */
/* @var $model OpViviendas */

//Override controller layout
//$this->layout = '//layouts/column1';


$this->breadcrumbs = array(
    'Viviendas' => array('index'),
    $model->id_bien_afec => array('view', 'id' => $model->id_bien_afec),
    'Actualizar hogar',
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
    $this->menu[] = array('label' => 'Ver esta vivienda', 'url' => array('view', 'id' => $model->id_bien_afec));
    $this->menu[] = array('label' => 'Editar esta vivienda', 'url' => array('update', 'id' => $model->id_bien_afec));
    $this->menu[] = array('label' => 'Buscar otra vivienda por datos del bien afectado', 'url' => array('admin'));
    $this->menu[] = array('label' => 'Buscar otra vivienda por miembros del hogar', 'url' => array('opHogares/admin', 'id' => $model->id_bien_afec));
}
?>



<h2 style="display:inline;">Actualizar Miembros de Hogar</h2><a title="Utilice la opción 'Agregar miembro' para agregar nuevos miembros de hogar al final de la página. Utilice la opción 'Eliminar' para quitar miembros de hogar. No olvide hundir el botón 'Guardar' al final de la página para registrar los cambios."><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_tooltip.png" alt="<?php echo CHtml::encode($this->pageTitle); ?>"></a><br><br>

<br>
<h1>ID Bien Afectado <?php echo $model->id_bien_afec; ?></h1>

<?php
//echo $this->renderPartial('_form', array('model' => $model));

echo $this->renderPartial('_formhogares', array('model' => $model, 'member' => $member, 'validatedMembers' => $validatedMembers));

//echo Yii::trace(CVarDumper::dumpAsString($model->id_bien_afec), 'vardump');
?>
<br>
<h2 style="display:inline;">Adjuntar soportes de tenencia</h2><a title="Haga click sobre el boton rojo para adjuntar solo un archivo. Arrastre y suelte multiples archivos sobre el para cargas por lote. Unicamente se permiten documentos PDF. "><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_tooltip.png" alt="<?php echo CHtml::encode($this->pageTitle); ?>"></a><br><br>
    <?php
    $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
        'id' => 'uploadFile',
        'config' => array(
//'action' => Yii::app()->createUrl('opViviendas/uploadcsv',array('id'=>$model->id_bien_afec)),
            'action' => Yii::app()->createUrl('opViviendas/uploaddocs'),
            'allowedExtensions' => array("pdf"), //array("jpg","jpeg","gif","exe","mov" and etc...
            'sizeLimit' => 10 * 1024 * 1024, // maximum file size in bytes
//'minSizeLimit'=>10*1024*1024,// minimum file size in bytes
//'onComplete'=>"js:function(id, fileName, responseJSON){ alert(fileName); }",
            'onSubmit' => 'js:function(file, ext){
            var id=' . $model->id_bien_afec . ';
            this.params.id = id;
        }',
            'messages' => array(
                'typeError' => "{file} tiene una extension invalida. Unicamente las extensiones {extensions} son permitidas.",
                'sizeError' => "{file} es muy grande, el tamaño maximo es {sizeLimit}.",
//'minSizeError' => "{file} is too small, minimum file size is {minSizeLimit}.",
                'emptyError' => "{file} esta vacio.",
                'onLeave' => "Los archivos estan subiendo, si deja la pagina su carga sera cancelada."
            ),
            'showMessage' => "js:function(message){ alert(message); }"
        )
    ));
    ?>