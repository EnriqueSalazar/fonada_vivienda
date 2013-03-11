<script>

    $(document).ready(function(){
        //alert('hi');
        
                //Esconde o muestra segun OpViviendas[atendido_por]
        $("input[name$='OpHogares[ostenta_tenencia]']").click(function(){
            var value = $(this).val();
            if(value=='1') {
                //alert(value);
                $("#tipo_tenencia_div").show('slow');
            }
            else if(value=='0') {
                //alert(value);
                $("#tipo_tenencia_div").hide('slow');
            }
        });
        var startval=$("input[name$='OpHogares[ostenta_tenencia]']:checked").val();
                           // alert(startval);

            if(startval=='1') {
                //alert(value);
                $("#tipo_tenencia_div").show('slow');
            }
            else{
                //alert(value);
                $("#tipo_tenencia_div").hide('slow');
            }
       
   
    });
</script>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

<?php
/* @var $this OpHogaresController */
/* @var $model OpHogares */

$this->breadcrumbs=array(
	'Op Hogares'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OpHogares', 'url'=>array('index')),
	array('label'=>'Create OpHogares', 'url'=>array('create')),
	array('label'=>'View OpHogares', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OpHogares', 'url'=>array('admin')),
);
?>

<h1>Update OpHogares <?php echo $model->id; ?></h1>

<?php // echo $this->renderPartial('_form', array('model'=>$model)); 

echo $this->renderPartial('_form', array('model'=>$model,
                          'member'=>$member,'validatedMembers'=>$validatedMembers));


?>