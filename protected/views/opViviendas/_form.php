<?php
/* @var $this OpViviendasController */
/* @var $model OpViviendas */
/* @var $form CActiveForm */
$firephp = FirePHP::getInstance(true);
?>
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'op-viviendas-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
            ));
    ?>

<!--    <p class="note">Fields with <span class="required">*</span> are required.</p>-->

    <?php echo $form->errorSummary($model); ?>

    <?php
//    $divipola = $this->createWidget('ext.jquery-cascade.jQueryCascade');
//
//// dropDownList($id, $selected, $data, $htmlOptions = array(), $source, $cascaded)
//    echo $divipola->dropDownList('depto_dane', '', CHtml::listData(Codigodane::model()->findAll(), 'depto_dane', 'depto_dane'), '', CController::createUrl('codigodane/list'), 'muni_dane' .
//            ''
//    );
//    echo Yii::trace(CVarDumper::dumpAsString($divipola), 'vardump');
    ?>

    <?php //ejemplo: echo $form->dropDownList($form, 'sex', array('1' => 'male', '2' => 'female')); ?>



    <div class="row">
        <?php echo $form->labelEx($model, 'id_bien_afec'); ?>
        <?php echo $form->textField($model, 'id_bien_afec', array('readonly' => true)); ?>
        <?php echo $form->error($model, 'id_bien_afec'); ?>
    </div>
    <p><h2>Información de la vivienda afectada</h2></p>
<!--<div class="row">-->
<?php
//    <!--        www.yiiframework.com/wiki/24/-->
//desde aqui sirve bien pero solo con codigo dane    
//    echo $form->labelEx($model, 'codigodane');
//    echo CHtml::dropDownList(
//            'depto_dane', '', CHtml::listData(Codigodane::model()->findAll(), 'depto_dane', 'depto_dane'), array(
//        'ajax' => array(
//            'type' => 'POST', //request type
//            'url' => CController::createUrl('codigodane/dynamicmuni'), //url to call.
//            //Style: CController::createUrl('currentController/methodToCall')
//            'update' => '#OpViviendas_codigodane', //selector to update
//        ),
//        'options' => array(Codigodane::model()->find('codigodane=:codigodane', array(':codigodane' => $model->codigodane))->depto_dane => array('selected' => true))
//            )
//    );
//    
?>
<!--</div>
<div class="row" id="municipio_div">-->
<?php
//    //    <!--    funciona con lista de municipios en blanco-->
//    $data = Codigodane::model()->findAll('depto_dane=:depto_dane', array(':depto_dane' => Codigodane::model()->find('codigodane=:codigodane', array(':codigodane' => $model->codigodane))->depto_dane));
//    $data = CHtml::listData($data, 'codigodane', 'muni_dane');
//    echo $form->dropDownList($model, 'codigodane', $data, array('options' => array(Codigodane::model()->find('codigodane=:codigodane', array(':codigodane' => $model->codigodane))->muni_dane => array('selected' => true))));
//    
?>
<!--</div>-->


<div class="row">
    <!--        www.yiiframework.com/wiki/24/-->
    <?php
    //desde aqui sirve bien pero solo con codigo dane

    echo $form->labelEx($model, 'codigodane');
    ?>
    <?php
    echo CHtml::dropDownList(
            'OpViviendas[depto]', '', CHtml::listData(Codigodane::model()->findAll(), 'depto_dane', 'depto_dane'), array(
        'ajax' => array(
            'type' => 'POST', //request type
            'url' => CController::createUrl('codigodane/dynamicmuni'), //url to call.
            //Style: CController::createUrl('currentController/methodToCall')
            'update' => '#OpViviendas_muni', //selector to update
        //'data'=>'js:javascript statement' 
        //leave out the data key to pass all form values through
        ),
//            'options' => array(Codigodane::model()->find('codigodane=:codigodane', 
//                  array(':codigodane'=> $model->codigodane))=>array('selected'=>true))    
        'options' => array(Codigodane::model()->find('codigodane=:codigodane', array(':codigodane' => $model->codigodane))->depto_dane => array('selected' => true))
            )
    );
    ?>
    <!--        $data=Codigodane::model()->findAll('depto_dane=:depto_dane', 
                      array(':depto_dane'=> $_POST['depto_dane']));-->
</div>
<div class="row" id="municipio_div">
    <?php
//empty since it will be filled by the other dropdown
//reemplazada por la de abajo que sigue mejor el MVC
//    echo CHtml::dropDownList('muni_dane', '', array());
    ?>
    <!--    funciona con lista de municipios en blanco-->
    <?php
    //echo $form->dropDownList($model,'codigodane',array(),array('options' => array(Codigodane::model()->find('codigodane=:codigodane', 
    //   array(':codigodane'=> $model->codigodane))->muni_dane=>array('selected'=>true)))); 
    ?>


    <?php
    $data = Codigodane::model()->findAll('depto_dane=:depto_dane', array(':depto_dane' => Codigodane::model()->find('codigodane=:codigodane', array(':codigodane' => $model->codigodane))->depto_dane));

    $data = CHtml::listData($data, 'muni_dane', 'muni_dane');
//    foreach($data as $value=>$muni_dane)
//    {
//        echo CHtml::tag('option',
//                   array('value'=>$value),CHtml::encode($muni_dane),true);
//    }
//    echo Yii::trace(CVarDumper::dumpAsString($data), 'vardump');
//    echo Yii::trace(CVarDumper::dumpAsString(Codigodane::model()->find('codigodane=:codigodane', array(':codigodane' => $model->codigodane))->muni_dane), 'vardump');
//echo Yii::trace(CVarDumper::dumpAsString(), 'vardump');
//echo Yii::trace(CVarDumper::dumpAsString(), 'vardump');

    echo $form->dropDownList($model, 'muni', $data, array('options' => array($model->muni => array('selected' => true))));
    ?>

</div>








<div class="row">
    <?php echo $form->labelEx($model, 'ref_catastral'); ?>
    <?php echo $form->textField($model, 'ref_catastral', array('size' => 12, 'maxlength' => 12)); ?>
    <?php echo $form->error($model, 'ref_catastral'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'num_viviendas'); ?>
    <?php echo $form->textField($model, 'num_viviendas', array('size' => 3, 'maxlength' => 3)); ?>
    <?php echo $form->error($model, 'num_viviendas'); ?>
</div>

<div class="row" id="georef">
    <!--    <div class="tooltipster" title="Los operadores deberán ajustar los puntos a geo referenciar, de acuerdo con la cartografía IGAC según el origen que se tenga: Bogotá – Magna; Este – Magna; Este Este –Magna; Oeste –Magna; Oeste Oeste - Magna"> -->
    <?php echo $form->labelEx($model, 'xy_magnasirgas', array('style' => 'display:inline;')); ?><a title="Los operadores deberán ajustar los puntos a georeferenciar, de acuerdo con la cartografía IGAC según el origen que se tenga: Bogotá – Magna; Este – Magna; Este Este –Magna; Oeste –Magna; Oeste Oeste - Magna"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_tooltip.png" alt="<?php echo CHtml::encode($this->pageTitle); ?>"></a>

    <!--    </div>-->

    <?php // echo $form->textField($model, 'xy_magnasirgas'); ?>
    <?php // echo $form->error($model, 'xy_magnasirgas'); ?>
    <?php echo $form->labelEx($model, 'lat'); ?>
    <?php echo $form->textField($model, 'lat'); ?>
    <?php echo $form->error($model, 'lat'); ?>
    <?php echo $form->labelEx($model, 'long'); ?>
    <?php echo $form->textField($model, 'long'); ?>
    <?php echo $form->error($model, 'long'); ?>
</div>

<div class="row">
    <!--            Cabecera  Centro Poblado  Rural Disperso-->
    <?php //ejemplo: echo $form->dropDownList($form, 'sex', array('1' => 'male', '2' => 'female'));     ?>
    <?php echo $form->labelEx($model, 'vali_territorio'); ?>
    <?php //original: echo $form->textField($model,'vali_territorio',array('size'=>60,'maxlength'=>100));    ?>
    <?php /* echo $form->radioButtonList($model,'GENDER',array('2'=>'Females','1'=>'Males'),array(
      'separator'=>'&nbsp;',
      'labelOptions'=>array(
      'style'=>'display: inline; margin-right: 10px; font-weight: normal;font-weight: normal;')
      ) */ ?>
    <?php //echo $form->dropDownList($model,'vali_territorio',array('Cabecera' => 'Cabecera', 'Centro Poblado' => 'Centro Poblado', 'Rural Disperso' => 'Rural Disperso')); ?>
    <?php
    echo $form->radioButtonList($model, 'vali_territorio', array('Cabecera' => 'Cabecera', 'Centro Poblado' => 'Centro Poblado', 'Rural Disperso' => 'Rural Disperso'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'vali_territorio'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'vali_nomcentro'); ?>
    <?php echo $form->textField($model, 'vali_nomcentro', array('size' => 60, 'maxlength' => 100)); ?>
    <?php echo $form->error($model, 'vali_nomcentro'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'vali_direccion'); ?>
    <?php echo $form->textField($model, 'vali_direccion', array('size' => 60, 'maxlength' => 100)); ?>
    <?php echo $form->error($model, 'vali_direccion'); ?>
</div>

<div class="row">
    <?php //echo $form->radioButtonList($model,'attribute',array('value' => 'Y', 'uncheckValue'=>'N'));      ?>
    <?php echo $form->labelEx($model, 'verificado'); ?>
    <?php
    echo $form->radioButtonList($model, 'verificado', array('1' => 'Si', '0' => 'No'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'verificado'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'vivienda_destruida'); ?>
    <?php
    echo $form->radioButtonList($model, 'vivienda_destruida', array('1' => 'Si', '0' => 'No'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'vivienda_destruida'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'material'); ?>
    <?php
    echo $form->radioButtonList($model, 'material', array('Mamposteria' => 'Mamposteria', 'Concreto' => 'Concreto', 'Tabla' => 'Tabla', 'Madera' => 'Madera', 'Zinc' => 'Zinc', 'Material de desecho' => 'Material de desecho', 'Bahareque' => 'Bahareque', 'Otro' => 'Otro'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'material'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'destino_edificacion'); ?>
    <?php
    echo $form->radioButtonList($model, 'destino_edificacion', array('Residencial' => 'Residencial', 'Residencial + Comercial' => 'Residencial + Comercial', 'Lote' => 'Lote', 'Otro' => 'Otro'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php //echo $form->textField($model,'destino_edificacion',array('size'=>60,'maxlength'=>100));     ?>
    <?php echo $form->error($model, 'destino_edificacion'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'numero_hogares'); ?>
    <?php echo $form->textField($model, 'numero_hogares', array('size' => 2, 'maxlength' => 2)); ?>
    <?php echo $form->error($model, 'numero_hogares'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'vivienda_habitada'); ?>
    <?php
    echo $form->radioButtonList($model, 'vivienda_habitada', array('1' => 'Si', '0' => 'No'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'vivienda_habitada'); ?>
</div>

<div class="row" id="donde_vive_div">
    <?php echo $form->labelEx($model, 'donde_vive'); ?>
    <?php //echo $form->textField($model,'donde_vive',array('size'=>60,'maxlength'=>100));    ?>
    <?php //echo $form->labelEx($model, 'Si el hogar no habita en la vivienda ¿En qué calidad vive?');    ?>
    <?php
    echo $form->radioButtonList($model, 'donde_vive', array('Arriendo subsidiado por el estado' => 'Arriendo subsidiado por el estado', 'Arriendo pagado con recursos propios' => 'Arriendo pagado con recursos propios', 'Conviviendo con otro hogar' => 'Conviviendo con otro hogar', 'Albergue' => 'Albergue', 'Cambuche' => 'Cambuche', 'Otro' => 'Otro'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'donde_vive'); ?>
</div>

<div class="row" id="dire_residencia_actual_div">
    <?php echo $form->labelEx($model, 'dire_residencia_actual'); ?>
    <?php echo $form->textField($model, 'dire_residencia_actual', array('size' => 60, 'maxlength' => 100)); ?>
    <?php echo $form->error($model, 'dire_residencia_actual'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'direccion_correspondencia'); ?>
    <?php echo $form->textField($model, 'direccion_correspondencia', array('size' => 60, 'maxlength' => 100)); ?>
    <?php echo $form->error($model, 'direccion_correspondencia'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'vali_telefono'); ?>
    <?php echo $form->textField($model, 'vali_telefono', array('size' => 60, 'maxlength' => 100)); ?>
    <?php echo $form->error($model, 'vali_telefono'); ?>
</div>

<!--    <div class="row">
<?php // echo $form->labelEx($model, 'fotografias');     ?>
<?php
//        echo $form->radioButtonList($model, 'fotografias', array('1' => 'Si', '0' => 'No'), array(
//            'separator' => '&nbsp;',
//            'labelOptions' => array(
//                'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
//        ));
?>
<?php // echo $form->error($model, 'fotografias');     ?>
    </div>-->

<div class="row">
    <?php echo $form->labelEx($model, 'vivienda_asegurada'); ?>
    <?php
    echo $form->radioButtonList($model, 'vivienda_asegurada', array('1' => 'Si', '0' => 'No'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'vivienda_asegurada'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'vivienda_hipotecada'); ?>
    <?php
    echo $form->radioButtonList($model, 'vivienda_hipotecada', array('1' => 'Si', '0' => 'No'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'vivienda_hipotecada'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'acueducto'); ?>
    <?php
    echo $form->radioButtonList($model, 'acueducto', array('Convencional' => 'Convencional', 'No convencional' => 'No convencional', 'No disponible' => 'No disponible'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'acueducto'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($model, 'alcantarillado'); ?>
    <?php
    echo $form->radioButtonList($model, 'alcantarillado', array('Convencional' => 'Convencional', 'No convencional' => 'No convencional', 'No disponible' => 'No disponible'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'alcantarillado'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($model, 'energia_electrica'); ?>
    <?php
    echo $form->radioButtonList($model, 'energia_electrica', array('Convencional' => 'Convencional', 'No convencional' => 'No convencional', 'No disponible' => 'No disponible'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'energia_electrica'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($model, 'vias_acceso'); ?>
    <?php
    echo $form->radioButtonList($model, 'vias_acceso', array('Disponibles' => 'Disponibles', 'No disponibles' => 'No disponibles'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'vias_acceso'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'zona_riesgo'); ?>
    <?php //echo $form->textField($model,'zona_riesgo');   ?>
    <?php
    echo $form->radioButtonList($model, 'zona_riesgo', array('Baja' => 'Baja', 'Media' => 'Media', 'Alta' => 'Alta', 'Por definir' => 'Por definir'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'zona_riesgo'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'amenaza'); ?>
    <?php //echo $form->textField($model,'zona_riesgo');   ?>
    <?php
    echo $form->radioButtonList($model, 'amenaza', array('Rio' => 'Rio', 'Montaña' => 'Montaña', 'Taludes' => 'Taludes', 'Arroyos' => 'Arrollos', 'Otro' => 'Otro'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'amenaza'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'vali_afectacion'); ?>
    <?php
    echo $form->radioButtonList($model, 'vali_afectacion', array('Avalancha' => 'Avalancha', 'Deslizamiento' => 'Deslizamiento', 'Inundacion' => 'Inundacion', 'Vendaval' => 'Vendaval', 'Otro' => 'Otro'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'vali_afectacion'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'tenencia'); ?>
    <?php
    echo $form->radioButtonList($model, 'tenencia', array('Propietario' => 'Propietario', 'Poseedor' => 'Poseedor', 'Arrendatario' => 'Arrendatario', 'Tenedor' => 'Tenedor', 'Otro' => 'Otro'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'tenencia'); ?>
</div>

<p><h2>Elegibilidad</h2></p>
<div class="row">
    <?php echo $form->labelEx($model, 'elegible'); ?>
    <?php //echo $form->textField($model, 'elegible');    ?>
    <?php
    echo $form->radioButtonList($model, 'elegible', array('1' => 'Si', '0' => 'No'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'elegible'); ?>
</div>

<div class="row" id="motivo_no_elegible_div">
    <?php echo $form->labelEx($model, 'motivo_no_elegible'); ?>
    <?php //echo $form->textField($model, 'motivo_no_elegible', array('size' => 60, 'maxlength' => 100));   ?>
    <?php
    echo $form->radioButtonList($model, 'motivo_no_elegible', array('Vivienda no destruida ni en zona de riesgo' => 'Vivienda no destruida ni en zona de riesgo', 'No demuestra tenencia' => 'No demuestra tenencia', 'Atendido por otra entidad' => 'Atendido por otra entidad', 'No ubicado' => 'No ubicado', 'Reporta mas de un bien' => 'Reporta mas de un bien', 'Posee otro bien en el mismo municipio' => 'Posee otro bien en el mismo municipio', 'Adquirio otro bien despues de la emergencia' => 'Adquirio otro bien despues de la emergencia', 'Otro' => 'Otro'), array(
        'separator' => '&nbsp;',
        'labelOptions' => array(
            'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
    ));
    ?>
    <?php echo $form->error($model, 'motivo_no_elegible'); ?>

    <div class="row" id="atendido_por_div">
        <div class="row">

            <?php echo $form->labelEx($model, 'atendido_por'); ?>
            <?php
            echo $form->radioButtonList($model, 'atendido_por', array('Colombia Humanitaria' => 'Colombia Humanitaria', 'Banco Agrario' => 'Banco Agrario', 'Ministerio de Vivienda' => 'Ministerio de Vivienda', 'Entidad territorial' => 'Entidad territorial', 'UNGRD' => 'UNGRD', 'Privado' => 'Privado', 'Otro' => 'Otro'), array(
                'separator' => '&nbsp;',
                'labelOptions' => array(
                    'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
            ));
            ?>
            <?php echo $form->error($model, 'atendido_por'); ?>
        </div>

        <div class="row" id="atendido_otro_div">
            <?php echo $form->labelEx($model, 'atendido_otro'); ?>
            <?php echo $form->textField($model, 'atendido_otro'); ?>
            <?php echo $form->error($model, 'atendido_otro'); ?>
        </div>
    </div>
</div>


<div id="atencion_div">
    <p><h2>Atencion</h2></p>

    <div class="row">
        <?php echo $form->labelEx($model, 'fecha_publicacion'); ?>
        <?php //echo $form->dateField($model, 'fecha_resolucion_asignada');    ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array('model' => $model, 'attribute' => 'fecha_publicacion',
            'options' => array('showAnim' => 'fold', 'dateFormat' => 'yy-mm-dd',),
            'htmlOptions' => array('style' => 'height:20px;'),));
        ?>
        <?php echo $form->error($model, 'fecha_publicacion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'medio_publicacion'); ?>
        <?php echo $form->textField($model, 'medio_publicacion'); ?>
        <?php echo $form->error($model, 'medio_publicacion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'resolucion_asignacion_fonada'); ?>
        <?php echo $form->textField($model, 'resolucion_asignacion_fonada'); ?>
        <?php echo $form->error($model, 'resolucion_asignacion_fonada'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'fecha_resolucion_asignada'); ?>
        <?php //echo $form->dateField($model, 'fecha_resolucion_asignada');    ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array('model' => $model, 'attribute' => 'fecha_resolucion_asignada',
            'options' => array('showAnim' => 'fold', 'dateFormat' => 'yy-mm-dd',),
            'htmlOptions' => array('style' => 'height:20px;'),));
        ?>
        <?php echo $form->error($model, 'fecha_resolucion_asignada'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'solucion_vivienda_contratada'); ?>
        <?php
        echo $form->radioButtonList($model, 'solucion_vivienda_contratada', array('1' => 'Si', '0' => 'No'), array(
            'separator' => '&nbsp;',
            'labelOptions' => array(
                'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
        ));
        ?>
        <?php echo $form->error($model, 'solucion_vivienda_contratada'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'solucion_vivienda_ejecucion'); ?>
        <?php
        echo $form->radioButtonList($model, 'solucion_vivienda_ejecucion', array('1' => 'Si', '0' => 'No'), array(
            'separator' => '&nbsp;',
            'labelOptions' => array(
                'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
        ));
        ?>
        <?php echo $form->error($model, 'solucion_vivienda_ejecucion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'modalidad_atencion'); ?>
        <?php
        echo $form->radioButtonList($model, 'modalidad_atencion', array('Reconstruccion' => 'Reconstruccion', 'Reubicacion' => 'Reubicacion'), array(
            'separator' => '&nbsp;',
            'labelOptions' => array(
                'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
        ));
        ?>
        <?php echo $form->error($model, 'modalidad_atencion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'nombre_proyecto'); ?>
        <?php echo $form->textField($model, 'nombre_proyecto'); ?>
        <?php echo $form->error($model, 'nombre_proyecto'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'direccion_proyecto'); ?>
        <?php echo $form->textField($model, 'direccion_proyecto'); ?>
        <?php echo $form->error($model, 'direccion_proyecto'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'tipo_solucion_otorgada'); ?>
        <?php
        echo $form->radioButtonList($model, 'tipo_solucion_otorgada', array('Convencional' => 'Convencional', 'No convencional' => 'No convencional'), array(
            'separator' => '&nbsp;',
            'labelOptions' => array(
                'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
        ));
        ?>
        <?php echo $form->error($model, 'tipo_solucion_otorgada'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'adaptacion_mitigacion'); ?>
        <?php //echo $form->textField($model, 'elegible');    ?>
        <?php
        echo $form->radioButtonList($model, 'adaptacion_mitigacion', array('1' => 'Si', '0' => 'No'), array(
            'separator' => '&nbsp;',
            'labelOptions' => array(
                'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
        ));
        ?>
        <?php echo $form->error($model, 'adaptacion_mitigacion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'caract_vivienda'); ?>
        <?php
        echo $form->radioButtonList($model, 'caract_vivienda', array('Nueva' => 'Nueva', 'Usada' => 'Usada'), array(
            'separator' => '&nbsp;',
            'labelOptions' => array(
                'style' => 'display: inline; margin-right: 10px; font-weight: normal;')
        ));
        ?>
        <?php echo $form->error($model, 'caract_vivienda'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model, 'valor_solucion_otorgada'); ?>
        <?php echo $form->textField($model, 'valor_solucion_otorgada', array('size' => 8, 'maxlength' => 8)); ?>
        <?php echo $form->error($model, 'valor_solucion_otorgada'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'gasto_servicios'); ?>
        <?php echo $form->textField($model, 'gasto_servicios', array('size' => 8, 'maxlength' => 8)); ?>
        <?php echo $form->error($model, 'gasto_servicios'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'gasto_mitigacion'); ?>
        <?php echo $form->textField($model, 'gasto_mitigacion', array('size' => 8, 'maxlength' => 8)); ?>
        <?php echo $form->error($model, 'gasto_mitigacion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'aporte_fonada'); ?>
        <?php echo $form->textField($model, 'aporte_fonada', array('size' => 8, 'maxlength' => 8)); ?>
        <?php echo $form->error($model, 'aporte_fonada'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'num_escritura'); ?>
        <?php echo $form->textField($model, 'num_escritura'); ?>
        <?php echo $form->error($model, 'num_escritura'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'fecha_escritura'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array('model' => $model, 'attribute' => 'fecha_escritura',
            'options' => array('showAnim' => 'fold', 'dateFormat' => 'yy-mm-dd',),
            'htmlOptions' => array('style' => 'height:20px;'),));
        ?>    
        <?php echo $form->error($model, 'fecha_escritura'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'notaria'); ?>
        <?php echo $form->textField($model, 'notaria', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'notaria'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'matricula_inmobiliaria'); ?>
        <?php echo $form->textField($model, 'matricula_inmobiliaria', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'matricula_inmobiliaria'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'fecha_entrega'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array('model' => $model, 'attribute' => 'fecha_entrega',
            'options' => array('showAnim' => 'fold', 'dateFormat' => 'yy-mm-dd',),
            'htmlOptions' => array('style' => 'height:20px;'),));
        ?>    
        <?php echo $form->error($model, 'fecha_entrega'); ?>
    </div>
</div>
<div class="row">
    <?php echo $form->labelEx($model, 'observaciones'); ?>
    <?php echo $form->textArea($model, 'observaciones', array('rows' => 6, 'cols' => 50)); ?>
    <?php echo $form->error($model, 'observaciones'); ?>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->