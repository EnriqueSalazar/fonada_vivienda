<?php
/* @var $this OpViviendasController */
/* @var $data OpViviendas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bien_afec')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bien_afec), array('view', 'id'=>$data->id_bien_afec)); ?>
	<br />

<!--	<b><?php // echo CHtml::encode($data->getAttributeLabel('ref_catastral')); ?>:</b>
	<?php // echo CHtml::encode($data->ref_catastral); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('num_viviendas')); ?>:</b>
	<?php // echo CHtml::encode($data->num_viviendas); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('xy_magnasirgas')); ?>:</b>
	<?php // echo CHtml::encode($data->xy_magnasirgas); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('vali_territorio')); ?>:</b>
	<?php echo CHtml::encode($data->vali_territorio); ?>
	<br />

<!--	<b><?php // echo CHtml::encode($data->getAttributeLabel('vali_nomcentro')); ?>:</b>
	<?php // echo CHtml::encode($data->vali_nomcentro); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('vali_direccion')); ?>:</b>
	<?php // echo CHtml::encode($data->vali_direccion); ?>
	<br />-->

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('verificado')); ?>:</b>
	<?php echo CHtml::encode($data->verificado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vivienda_destruida')); ?>:</b>
	<?php echo CHtml::encode($data->vivienda_destruida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destino_edificacion')); ?>:</b>
	<?php echo CHtml::encode($data->destino_edificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vivienda_habitada')); ?>:</b>
	<?php echo CHtml::encode($data->vivienda_habitada); ?>
	<br />

<!--	<b><?php // echo CHtml::encode($data->getAttributeLabel('donde_vive')); ?>:</b>
	<?php // echo CHtml::encode($data->donde_vive); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('dire_residencia_actual')); ?>:</b>
	<?php // echo CHtml::encode($data->dire_residencia_actual); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('vali_telefono')); ?>:</b>
	<?php // echo CHtml::encode($data->vali_telefono); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('numero_hogares')); ?>:</b>
	<?php // echo CHtml::encode($data->numero_hogares); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('fotografias')); ?>:</b>
	<?php // echo CHtml::encode($data->fotografias); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('vivienda_asegurada')); ?>:</b>
	<?php // echo CHtml::encode($data->vivienda_asegurada); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('vivienda_hipotecada')); ?>:</b>
	<?php // echo CHtml::encode($data->vivienda_hipotecada); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona_riesgo')); ?>:</b>
	<?php echo CHtml::encode($data->zona_riesgo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vali_afectacion')); ?>:</b>
	<?php echo CHtml::encode($data->vali_afectacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('elegible')); ?>:</b>
	<?php echo CHtml::encode($data->elegible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo_no_elegible')); ?>:</b>
	<?php echo CHtml::encode($data->motivo_no_elegible); ?>
	<br />

<!--	<b><?php // echo CHtml::encode($data->getAttributeLabel('resolucion_asignacion_fonada')); ?>:</b>
	<?php // echo CHtml::encode($data->resolucion_asignacion_fonada); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('fecha_resolucion_asignada')); ?>:</b>
	<?php // echo CHtml::encode($data->fecha_resolucion_asignada); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('solucion_vivienda_contratada')); ?>:</b>
	<?php // echo CHtml::encode($data->solucion_vivienda_contratada); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('solucion_vivienda_ejecucion')); ?>:</b>
	<?php // echo CHtml::encode($data->solucion_vivienda_ejecucion); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('modalidad_atencion')); ?>:</b>
	<?php // echo CHtml::encode($data->modalidad_atencion); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('tipo_solucion_otorgada')); ?>:</b>
	<?php // echo CHtml::encode($data->tipo_solucion_otorgada); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('caract_vivienda')); ?>:</b>
	<?php // echo CHtml::encode($data->caract_vivienda); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('valor_solucion_otorgada')); ?>:</b>
	<?php // echo CHtml::encode($data->valor_solucion_otorgada); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('num_escritura')); ?>:</b>
	<?php // echo CHtml::encode($data->num_escritura); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('fecha_escritura')); ?>:</b>
	<?php // echo CHtml::encode($data->fecha_escritura); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('notaria')); ?>:</b>
	<?php // echo CHtml::encode($data->notaria); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('matricula_inmobiliaria')); ?>:</b>
	<?php // echo CHtml::encode($data->matricula_inmobiliaria); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('fecha_entrega')); ?>:</b>
	<?php // echo CHtml::encode($data->fecha_entrega); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php // echo CHtml::encode($data->observaciones); ?>
	<br />-->



</div>