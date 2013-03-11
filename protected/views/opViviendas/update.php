<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>-->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.qtip.min.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.qtip.min.js"></script>
<script type="text/javascript">
            $(document).ready(function() {
                // By suppling no content attribute, the library uses each elements title attribute by default
                $('a[href][title]').qtip({
                    content: {
                        text: false // Use each elements title attribute
                    },
                    style: 'cream' // Give it some style
                });

                // NOTE: You can even omit all options and simply replace the regular title tooltips like so:
                // $('#content a[href]').qtip();
            });
        </script>
<script>

    $(document).ready(function(){
        var ovhabitada=$("input:radio[name='OpViviendas[vivienda_habitada]']:checked").val();
        var ovelegible=$("input:radio[name='OpViviendas[elegible]']:checked").val();
        var ovmotivo=$("input:radio[name='OpViviendas[motivo_no_elegible]']:checked").val();
        var ovatendido=$("input:radio[name='OpViviendas[atendido_por]']:checked").val();
        if(ovhabitada=='1') {
            //alert(value);
            $("#donde_vive_div").hide('slow');
            $("#dire_residencia_actual_div").hide('slow');
        }
        else if(ovhabitada=='0') {
            //alert(value);
            $("#donde_vive_div").show('slow');
            $("#dire_residencia_actual_div").show('slow');
        }else{
            $("#donde_vive_div").hide('slow');
            $("#dire_residencia_actual_div").hide('slow');
        }
        if(ovelegible=='1') {
            $("#motivo_no_elegible_div").hide('slow');
            $("#atencion_div").show('slow');
        }
        else if(ovelegible=='0') {
            //alert(value);
            $("#motivo_no_elegible_div").show('slow');
            $("#atencion_div").hide('slow');
        }else{
            $("#motivo_no_elegible_div").hide('slow');
            $("#atencion_div").hide('slow');
        }
        if(ovmotivo=="Atendido por otra entidad") {
            $("#atendido_por_div").show('slow');
        }
        else{
            //alert(value);
            $("#atendido_por_div").hide('slow');
        }
        if(ovatendido=='Otro') {
            //alert(value);
            $("#atendido_otro_div").show('slow');
        }
        else {
            //alert(value);
            $("#atendido_otro_div").hide('slow');
        }
        //                  alert(radio);

        //
        //
        //
        //Esconde muestra segun OpViviendas[vivienda_habitada]

        $("input[name$='OpViviendas[vivienda_habitada]']").click(function(){
            var value = $(this).val();
            if(value=='1') {
                //alert(value);
                $("#donde_vive_div").hide('slow');
                $("#dire_residencia_actual_div").hide('slow');
            }
            else if(value=='0') {
                //alert(value);
                $("#donde_vive_div").show('slow');
                $("#dire_residencia_actual_div").show('slow');
            }
        });
        //        $("#donde_vive_div").hide();
        //        $("#dire_residencia_actual_div").hide();
        
        //Esconde o muestra segun OpViviendas[elegible]
        $("input[name$='OpViviendas[elegible]']").click(function(){
            var value = $(this).val();
            if(value=='1') {
                $("#motivo_no_elegible_div").hide('slow');
                $("#atencion_div").show('slow');
            }
            else if(value=='0') {
                //alert(value);
                $("#motivo_no_elegible_div").show('slow');
                $("#atencion_div").hide('slow');
            }
        });
       
        //                alert(document.getElementsByName('OpViviendas[elegible]')[1].val());
        //
        //        alert(document.getElementsByName('OpViviendas[elegible]')[2].val());


       
       
        
  
        //        $("#motivo_no_elegible_div").hide();
        //        $("#atencion_div").hide();
        //Esconde o muestra segun OpViviendas[motivo_no_elegible]
        $("input[name$='OpViviendas[motivo_no_elegible]']").click(function(){
            var value = $(this).val();
            //alert(value);
            if(value=="Atendido por otra entidad") {
                $("#atendido_por_div").show('slow');
            }
            else{
                //alert(value);
                $("#atendido_por_div").hide('slow');
            }
        });
        //        $("#atendido_por_div").hide();
        
        //Esconde o muestra segun OpViviendas[atendido_por]
        $("input[name$='OpViviendas[atendido_por]']").click(function(){
            var value = $(this).val();
            if(value=='Otro') {
                //alert(value);
                $("#atendido_otro_div").show('slow');
            }
            else {
                //alert(value);
                $("#atendido_otro_div").hide('slow');
            }
        });
        //        $("#atendido_otro_div").hide();    

         
    });
</script>

<?php
Yii::app()->clientScript->registerCoreScript('jquery');
//$this->widget('ext.tooltipster.tooltipster');
?>
<?php
/* @var $this OpViviendasController */
/* @var $model OpViviendas */

$this->breadcrumbs = array(
    'Viviendas' => array('index'),
    $model->id_bien_afec => array('view', 'id' => $model->id_bien_afec),
    'Actualizar',
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
    $this->menu[] = array('label' => 'Buscar otra vivienda por datos del bien afectado', 'url' => array('admin'));
    $this->menu[] = array('label' => 'Buscar otra vivienda por miembros del hogar', 'url' => array('opHogares/admin', 'id' => $model->id_bien_afec));
    $this->menu[] = array('label' => 'Editar miembros de hogar de esta vivienda', 'url' => array('updatehogares', 'id' => $model->id_bien_afec));
}
//echo Yii::trace(CVarDumper::dumpAsString($model->id_bien_afec), 'vardump');
//echo Yii::trace(CVarDumper::dumpAsString($this->uniqueid), 'vardump');
//echo Yii::trace(CVarDumper::dumpAsString($this->action->Id), 'vardump');
$queryvar = "";
$queryvar.="id_bien_afect=";
$queryvar.=$model->id_bien_afec;
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
?>
<br>
<h1>Actualizar Vivienda <?php echo $model->id_bien_afec; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
<br>
<h2 style="display:inline;">Adjuntar archivos</h2><a title="Haga click sobre el boton rojo para subir solo un archivo. Arrastre y suelte multiples archivos sobre el para cargas por lote. Unicamente se permiten fotos JPG de predios y viviendas, y documentos PDF. Los documentos escaneados o fotografiados deben ser convertidos a PDF."><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_tooltip.png" alt="<?php echo CHtml::encode($this->pageTitle); ?>"></a><br><br>
    <?php
    $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
        'id' => 'uploadFile',
        'config' => array(
//'action' => Yii::app()->createUrl('opViviendas/uploadcsv',array('id'=>$model->id_bien_afec)),
            'action' => Yii::app()->createUrl('opViviendas/uploadfoto'),
            'allowedExtensions' => array("jpg", "pdf"), //array("jpg","jpeg","gif","exe","mov" and etc...
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

