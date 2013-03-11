<?php
/* @var $this OpHogaresController */
/* @var $model OpHogares */
/* @var $form CActiveForm */
$firephp = FirePHP::getInstance(true);
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'op-hogares-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php
    echo $form->errorSummary($model);

    $this->widget('ext.jqrelcopy.JQRelcopy', array(
        'id' => 'copylink',
        'removeText' => 'remove' //uncomment to add remove link
    ));
    ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'id_bien_afectado'); ?>
        <?php echo $form->textField($model, 'id_bien_afectado', array('size' => 20, 'maxlength' => 20, 'readonly' => true)); ?>
        <?php echo $form->error($model, 'id_bien_afectado'); ?>
    </div>
    <div class="wrapper copy">
        <div class="row">
            <?php echo $form->labelEx($model, 'nombres_apellidos'); ?>
            <?php echo $form->textField($model, 'nombres_apellidos', array('size' => 60, 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'nombres_apellidos'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'numero_documento'); ?>
            <?php echo $form->textField($model, 'numero_documento', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'numero_documento'); ?>
       
            <?php echo $form->labelEx($model, 'tipo_documento'); ?>
            <?php // echo $form->textField($model,'tipo_documento',array('size'=>60,'maxlength'=>100)); ?>
            <?php
            echo $form->radioButtonList($model, 'tipo_documento', array('Cedula' => 'Cedula', 'Tarjeta de identidad' => 'Tarjeta de identidad', 'Cedula extranjeria' => 'Cedula extranjeria', 'Pasaporte' => 'Pasaporte'), array(
                'separator' => '&nbsp;',
                'labelOptions' => array(
                    'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
            ));
            ?>
            <?php echo $form->error($model, 'tipo_documento'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'parentesco'); ?>
            <?php echo $form->textField($model, 'parentesco', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'parentesco'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'ostenta_tenencia'); ?>
            <?php
            echo $form->radioButtonList($model, 'ostenta_tenencia', array('1' => 'SI', '0' => 'NO'), array(
                'separator' => '&nbsp;',
                'labelOptions' => array(
                    'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
            ));
            ?>		<?php echo $form->error($model, 'ostenta_tenencia'); ?>
        </div>

        <div class="row" id="tipo_tenencia_div">
            <?php echo $form->labelEx($model, 'tipo_tenencia'); ?>
            <?php echo $form->textField($model, 'tipo_tenencia', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'tipo_tenencia'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'estado_civil'); ?>
            <?php echo $form->textField($model, 'estado_civil', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'estado_civil'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'edad'); ?>
            <?php echo $form->textField($model, 'edad'); ?>
            <?php echo $form->error($model, 'edad'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'sexo'); ?>
            <?php echo $form->textField($model, 'sexo', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'sexo'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'ocupacion'); ?>
            <?php echo $form->textField($model, 'ocupacion', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'ocupacion'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'ingresos_mensuales'); ?>
            <?php echo $form->textField($model, 'ingresos_mensuales'); ?>
            <?php echo $form->error($model, 'ingresos_mensuales'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'poblacion_especial'); ?>
            <?php echo $form->textField($model, 'poblacion_especial', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'poblacion_especial'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'observaciones'); ?>
            <?php echo $form->textArea($model, 'observaciones', array('rows' => 6, 'cols' => 50)); ?>
            <?php echo $form->error($model, 'observaciones'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'existe'); ?>
            <?php echo $form->textField($model, 'existe'); ?>
            <?php echo $form->error($model, 'existe'); ?>
        </div>
    </div>
    <a id="copylink" href="#" rel=".copy">Agregar otro miembro de hogar</a>    

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->