<?php
/* @var $this OpViviendasController */
/* @var $model OpViviendas */
/* @var $form CActiveForm */
$firephp = FirePHP::getInstance(true);
?>

<div class="form wide">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'op-viviendas-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
            ));
    ?>
    </br>
<!--    <p class="note">Fields with <span class="required">*</span> are required.</p>-->

    <?php
//    echo $form->errorSummary($model);
    echo $form->errorSummary(array_merge(array($model), $validatedMembers));
    ?>
    <div class="row" style="visibility:hidden;">
        <?php // echo $form->labelEx($model, 'id_bien_afec'); ?></br>
        <?php echo $form->textField($model, 'id_bien_afec', array('readonly' => true)); ?>
        <?php // echo $form->error($model, 'id_bien_afec'); ?>
    </div>

    <?php
// see http://www.yiiframework.com/doc/guide/1.1/en/form.table
// Note: Can be a route to a config file too,
//       or create a method 'getMultiModelForm()' in the member model

    $memberFormConfig = array(
        'elements' => array(
//            'nombres_apellidos' => array(
//                'type' => 'text',
//                'maxlength' => 100,
//            ),
            'apellido1' => array(
                'type' => 'text',
                'maxlength' => 100,
            ),
            'apellido2' => array(
                'type' => 'text',
                'maxlength' => 100,
            ),
            'nombre1' => array(
                'type' => 'text',
                'maxlength' => 100,
            ),
            'nombre2' => array(
                'type' => 'text',
                'maxlength' => 100,
            ),
            'tipo_documento' => array(
                'type' => 'dropdownlist',
                //it is important to add an empty item because of new records
                'items' => array('' => '-', 'Cedula' => 'Cedula', 'Tarjeta de identidad' => 'Tarjeta de identidad'),
            ),
            'numero_documento' => array(
                'type' => 'number',
                'size' => 20,
                'maxlength' => 20,
            ),
            'estado_civil' => array(
                'type' => 'dropdownlist',
                //it is important to add an empty item because of new records
                'items' => array('' => '-', 'Soltero' => 'Soltero', 'Casado' => 'Casado', 'Viudo' => 'Viudo', 'Divorciado' => 'Divorciado', 'Union libre' => 'Union libre',),
            ),
            'edad' => array(
                'type' => 'text',
                'size' => 2,
                'maxlength' => 2,
            ),
            'sexo' => array(
                'type' => 'dropdownlist',
                'items' => array('' => '-', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino',),
            ),
            'ocupacion' => array(
                'type' => 'dropdownlist',
                //it is important to add an empty item because of new records
                'items' => array('' => '-', 'Empleado' => 'Empleado', 'Independiente' => 'Independiente', 'Estudiante' => 'Estudiante', 'Ama de casa' => 'Ama de casa', 'Desempleado' => 'Desempleado', 'Otro' => 'Otro',),
            ),
            'ingresos_mensuales' => array(
                'type' => 'text',
                'size' => 8,
                'maxlength' => 8,
            ),
            'poblacion_especial' => array(
                'type' => 'dropdownlist',
                //it is important to add an empty item because of new records
                'items' => array('' => '-', 'Madre comunitaria' => 'Madre comunitaria', 'Afrocolombiano' => 'Afrocolombiano', 'Rom' => 'Rom', 'Indigena' => 'Indigena', 'Desplazado' => 'Desplazado', 'Discapacitado' => 'Discapacitado', 'Tercera edad' => 'Tercera edad',),
            ),
//            'poblacion_especial' => array(
//                'label' => 'Poblacion Especial',
//                'type' => 'radiolist',
//                //it is important to add an empty item because of new records
//                'items' => array('Madre comunitaria' => 'Madre comunitaria', 'Afrocolombiano' => 'Afrocolombiano', 'Rom' => 'Rom', 'Indigena' => 'Indigena', 'Desplazado' => 'Desplazado', 'Discapacitado' => 'Discapacitado', 'Tercera edad' => 'Tercera edad',),
//                'separator' => '',
////                'labelOptions' => array('style' => 'display:inline'), // add this code
//                'container' => 'table',
////                'class' => 'pob',
////                'template' => '<table style="border:5px solid gray;"><td style="border:5px solid gray;">{label}</td><td style="border:5px solid gray;">{input}</td></table>',
//                'template' => '<table style="border:5px solid gray;">{label}<br>{input}</table>',
//
//                ),
            
//            'tipo_tenencia' => array(
//                'type' => 'dropdownlist',
//                //it is important to add an empty item because of new records
//                'items' => array'(' => '-', 'Propietario' => 'Propietario', 'Poseedor' => 'Poseedor', 'Ocupante' => 'Ocupante', 'Tenedor' => 'Tenedor', 'Otro' => 'Otro', ),
//            ),
            'ostenta_tenencia' => array(
                'type' => 'checkboxlist',
                'items' => array('1' => ''),
            )
        )
    );
    ?>
    <!--</div>
    <div  class="thetablediv"  >
        <div>-->

    <?php
    $this->widget('ext.multimodelform.MultiModelForm', array(
        'id' => 'id', //the unique widget id
        'formConfig' => $memberFormConfig, //the form configuration array
        'model' => $member, //instance of the form model
        //if submitted not empty from the controller,
        //the form will be rendered with validation errors
        'validatedItems' => $validatedMembers,
//        'tableView' => true,
        'hideCopyTemplate' => true,
        //array of member instances loaded from db
        'data' => $member->findAll('id_bien_afectado=:bienId', array(':bienId' => $model->id_bien_afec)),
    ));
    ?>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
    </div>
</div>


<?php $this->endWidget(); ?>

<!-- form -->

<style>
   
        table{
        width:10px;
    }
    
    </style>