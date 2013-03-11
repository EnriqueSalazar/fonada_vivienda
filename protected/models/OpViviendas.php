<?php

/**
 * This is the model class for table "op_viviendas".
 *
 * The followings are the available columns in table 'op_viviendas':
 * @property integer $id_bien_afec
 * @property integer $ref_catastral
 * @property integer $num_viviendas
 * @property string $xy_magnasirgas
 * @property string $vali_territorio
 * @property string $vali_nomcentro
 * @property string $vali_direccion
 * @property integer $verificado
 * @property integer $vivienda_destruida
 * @property string $destino_edificacion
 * @property integer $vivienda_habitada
 * @property string $donde_vive
 * @property string $dire_residencia_actual
 * @property string $vali_telefono
 * @property integer $numero_hogares
 * @property integer $vivienda_asegurada
 * @property integer $vivienda_hipotecada
 * @property string $acueducto
 * @property string $alcantarillado
 * @property string $energia_electrica
 * @property string $vias_acceso
 * @property integer $zona_riesgo
 * @property string $vali_afectacion
 * @property integer $ostenta_tenencia
 * @property integer $elegible
 * @property string $motivo_no_elegible
 * @property string $atendido_por
 * @property string $atendido_otro
 * @property integer $resolucion_asignacion_fonada
 * @property string $fecha_resolucion_asignada
 * @property integer $solucion_vivienda_contratada
 * @property integer $solucion_vivienda_ejecucion
 * @property string $modalidad_atencion
 * @property string $tipo_solucion_otorgada
 * @property string $caract_vivienda
 * @property integer $valor_solucion_otorgada
 * @property integer $num_escritura
 * @property string $fecha_escritura
 * @property string $notaria
 * @property integer $matricula_inmobiliaria
 * @property string $fecha_entrega
 * @property string $observaciones
 * @property integer $codigodane
 * @property string $tenencia
 * @property string $depto
 * @property string $muni
 * @property float $long
 * @property long $lat
 * @property string $operador
 * @property string $material
 * @property string $evento
 * @property string $amenaza
 * @property string $direccion_correspondencia
 * @property string $fecha_publicacion
 * @property string $medio_publicacion
 * @property integer $gasto_servicios
 * @property integer $gasto_mitigacion
 * @property integer $aporte_fonada
 * @property integer $adaptacion_mitigacion
 * @property string $nombre_proyecto
 * @property string $direccion_proyecto 
 * @property string $responsable_atencion


 */
class OpViviendas extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OpViviendas the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'op_viviendas';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_bien_afec', 'required', 'message' => '',),
            array('adaptacion_mitigacion, aporte_fonada, gasto_mitigacion, gasto_servicios, id_bien_afec, num_viviendas, verificado, vivienda_destruida, vivienda_habitada, numero_hogares, vivienda_asegurada, vivienda_hipotecada, elegible, resolucion_asignacion_fonada, solucion_vivienda_contratada, solucion_vivienda_ejecucion, valor_solucion_otorgada, num_escritura, matricula_inmobiliaria, codigodane', 'numerical', 'integerOnly' => true, 'message' => 'Debe ser un numero entero'),
            array('responsable_atencion, direccion_proyecto, nombre_proyecto, medio_publicacion, direccion_correspondencia, depto, muni, ref_catastral, tenencia, vali_territorio, vali_nomcentro, vali_direccion, destino_edificacion, donde_vive, dire_residencia_actual, zona_riesgo, vali_telefono, vali_afectacion, motivo_no_elegible, modalidad_atencion, tipo_solucion_otorgada, caract_vivienda, notaria', 'length', 'max' => 100),
            array('direccion_proyecto, nombre_proyecto, adaptacion_mitigacion, aporte_fonada, gasto_mitigacion, gasto_servicios, medio_publicacion, fecha_publicacion, direccion_correspondencia, id_bien_afec, ref_catastral, num_viviendas, xy_magnasirgas,  vali_territorio, vali_nomcentro, vali_direccion, verificado, vivienda_destruida, destino_edificacion, vivienda_habitada, donde_vive, dire_residencia_actual, vali_telefono, numero_hogares, vivienda_asegurada, vivienda_hipotecada, acueducto, alcantarillado, energia_electrica, vias_acceso, zona_riesgo, vali_afectacion, ostenta_tenencia, elegible, motivo_no_elegible, atendido_por, atendido_otro, resolucion_asignacion_fonada, fecha_resolucion_asignada, solucion_vivienda_contratada, solucion_vivienda_ejecucion, modalidad_atencion, tipo_solucion_otorgada, caract_vivienda, valor_solucion_otorgada, num_escritura, fecha_escritura, notaria, matricula_inmobiliaria, fecha_entrega, observaciones, codigodane, tenencia, depto, muni, lat, long, operador, material, evento, amenaza', 'safe'),
//            array('lat', 'type', 'type' => 'float'),
//            array('long', 'type', 'type' => 'float'),
            array('lat', 'numerical', 'min' => 500000, 'max' => 1300000, 'tooSmall' => 'X debe estar en el rango 500 000 - 1 300 000', 'tooBig' => 'X debe estar en el rango 500 000 - 1 300 000', 'message' => 'Debe ser un numero decimal. Usar decimales separados por un punto.'),
            array('long', 'numerical', 'min' => 300000, 'max' => 1600000, 'tooSmall' => 'Y debe estar en el rango 300 000 - 1 600 000', 'tooBig' => 'X debe estar en el rango 300 000 - 1 600 000', 'message' => 'Debe ser un numero decimal. Usar decimales separados por un punto.'),
            array('valor_solucion_otorgada', 'numerical', 'max' => 70 * 589500, 'tooBig' => 'El valor de la solucion otorgada no puede ser mayor a 70SMLV - SMLV 2013 $589.500'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id_bien_afec, depto, muni', 'safe', 'on' => 'search'),
            array('vali_territorio', 'in', 'range' => array('Cabecera', 'Centro Poblado', 'Rural Disperso'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('adaptacion_mitigacion, verificado, vivienda_destruida, vivienda_habitada, vivienda_asegurada, vivienda_hipotecada, elegible, solucion_vivienda_contratada, solucion_vivienda_ejecucion', 'in', 'range' => array(0, 1), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('destino_edificacion', 'in', 'range' => array('Residencial', 'Residencial + Comercial', 'Lote', 'Otro'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('donde_vive', 'in', 'range' => array('Arriendo subsidiado por el estado', 'Arriendo pagado con recursos propios', 'Conviviendo con otro hogar', 'Albergue', 'Cambuche', 'Otro'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('acueducto, alcantarillado, energia_electrica', 'in', 'range' => array('Convencional', 'No convencional', 'No disponible'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('vias_acceso', 'in', 'range' => array('Disponibles', 'No disponibles'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('zona_riesgo', 'in', 'range' => array('Baja', 'Media', 'Alta', 'Por definir'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('vali_afectacion', 'in', 'range' => array('Avalancha', 'Deslizamiento', 'Inundacion', 'Vendaval', 'Otro'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('tenencia', 'in', 'range' => array('Propietario', 'Poseedor', 'Arrendatario', 'Tenedor', 'Otro'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('motivo_no_elegible', 'in', 'range' => array('Vivienda no destruida ni en zona de riesgo', 'No demuestra tenencia', 'Atendido por otra entidad', 'No ubicado', 'Reporta mas de un bien', 'Posee otro bien en el mismo municipio', 'Adquirio otro bien despues de la emergencia', 'Otro'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('atendido_por', 'in', 'range' => array('Colombia Humanitaria', 'Banco Agrario', 'Ministerio de Vivienda', 'Entidad territorial', 'UNGRD', 'Privado', 'Otro'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('fecha_publicacion, fecha_resolucion_asignada, fecha_entrega', 'date', 'format' => 'yyyy-MM-dd', 'message' => 'La fecha debe tener el formato yyyy-mm-dd'),
            array('modalidad_atencion', 'in', 'range' => array('Reconstruccion', 'Reubicacion'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('tipo_solucion_otorgada', 'in', 'range' => array('Convencional', 'No convencional'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('caract_vivienda', 'in', 'range' => array('Nueva', 'Usada'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('id_bien_afec', 'isAuth'),
            array('material', 'in', 'range' => array('Mamposteria', 'Concreto', 'Tabla', 'Madera', 'Zinc', 'Material de desecho', 'Bahareque', 'Otro'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('evento', 'in', 'range' => array('Avalancha', 'Inundacion', 'Deslizamiento', 'Socavacion'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('amenaza', 'in', 'range' => array('Rio', 'Montaña', 'Taludes', 'Arroyos', 'Otro'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
        );
    }

    /**
     * Regla adicional de autorizacion.
     */
    public function isAuth($attribute) {
        if (($this->responsable_atencion) !== (Yii::app()->user->Operador)) {
            $this->addError($attribute, 'Registro no autorizado');
        }
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_bien_afec' => 'ID bien afectado',
            'ref_catastral' => 'ID Catastral de predio',
            'num_viviendas' => 'Número de viviendas por predio',
            'xy_magnasirgas' => 'Georeferenciación: Magna-Sirgas Centro Bogotá',
            'vali_territorio' => 'Validación territorio',
            'vali_nomcentro' => 'Nombre del centro poblado',
            'vali_direccion' => 'Dirección',
            'verificado' => 'Verificado',
            'vivienda_destruida' => 'Vivienda destruida',
            'destino_edificacion' => 'Destino de la edificación',
            'vivienda_habitada' => 'Vivienda habitada',
            'donde_vive' => '¿En calidad de que vive?',
            'dire_residencia_actual' => 'Direccion de residencia actual',
            'vali_telefono' => 'Telefono de contacto',
            'numero_hogares' => 'Numero de hogares que habitan la vivienda',
            'vivienda_asegurada' => 'Vivienda asegurada',
            'vivienda_hipotecada' => 'Vivienda hipotecada',
            'acueducto' => 'Acueducto',
            'alcantarillado' => 'Alcantarillado',
            'energia_electrica' => 'Energia electrica',
            'vias_acceso' => 'Vias de acceso',
            'zona_riesgo' => 'En zona de amenaza',
            'vali_afectacion' => 'Validacion de la afectacion',
            'ostenta_tenencia' => 'Quien en el hogar ostenta la tenencia?',
            'elegible' => 'Cumple requisitos de elegibilidad',
            'motivo_no_elegible' => 'Motivo de no elegibilidad',
            'atendido_por' => 'Si ya fue atendido, Quien lo atendio?',
            'atendido_otro' => 'Especifique quien lo atendio',
            'resolucion_asignacion_fonada' => 'Resolucion de asignacion Fondo Adaptacion',
            'fecha_resolucion_asignada' => 'Fecha resolucion de asignacion Fondo Adaptacion',
            'solucion_vivienda_contratada' => 'Solucion de vivienda contratada',
            'solucion_vivienda_ejecucion' => 'Solucion vivienda en ejecucion',
            'modalidad_atencion' => 'Modalidad de atencion',
            'tipo_solucion_otorgada' => 'Tipo de solucion otorgada',
            'caract_vivienda' => 'Caracteristica de la vivienda',
            'valor_solucion_otorgada' => 'Valor de la solucion otorgada',
            'num_escritura' => 'Numero de escritura',
            'fecha_escritura' => 'Fecha de escritura',
            'notaria' => 'Notaria (incluir ciudad)',
            'matricula_inmobiliaria' => 'Matricula inmobiliaria',
            'fecha_entrega' => 'Fecha de entrega',
            'observaciones' => 'Observaciones',
            'codigodane' => 'Codigo Dane (Departamento / Municipio)',
            'tenencia' => 'Tipo de tenencia',
            'depto' => 'Departamento',
            'muni' => 'Municipio',
            'lat' => 'X',
            'long' => 'Y',
            'operador' => 'Operador zonal',
            'material' => 'Material',
            'evento' => 'Tipo de evento',
            'amenaza' => 'Amenaza cercana',
            'direccion_correspondencia' => 'Dirección de correspondencia',
            'fecha_publicacion' => 'Fecha de publicación',
            'medio_publicacion' => 'Medio de publicación',
            'gasto_servicios' => 'Gasto en servicios públicos',
            'gasto_mitigacion' => 'Gasto en mitigación de amenazas',
            'aporte_fonada' => 'Aporte del Fondo Adaptación',
            'adaptacion_mitigacion' => 'Con adaptación para mitigación del riesgo?',
            'nombre_proyecto' => 'Nombre del proyecto',
            'direccion_proyecto' => 'Dirección del proyecto'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_bien_afec', $this->id_bien_afec);
        $criteria->compare('ref_catastral', $this->ref_catastral);
//        $criteria->compare('num_viviendas', $this->num_viviendas);
        $criteria->compare('vali_territorio', $this->vali_territorio, true);
        $criteria->compare('vali_nomcentro', $this->vali_nomcentro, true);
        $criteria->compare('vali_direccion', $this->vali_direccion, true);
        $criteria->compare('verificado', $this->verificado);
        $criteria->compare('vivienda_destruida', $this->vivienda_destruida);
        $criteria->compare('destino_edificacion', $this->destino_edificacion, true);
        $criteria->compare('vivienda_habitada', $this->vivienda_habitada);
        $criteria->compare('donde_vive', $this->donde_vive, true);
        $criteria->compare('dire_residencia_actual', $this->dire_residencia_actual, true);
        $criteria->compare('vali_telefono', $this->vali_telefono, true);
        $criteria->compare('numero_hogares', $this->numero_hogares);
        $criteria->compare('vivienda_asegurada', $this->vivienda_asegurada);
        $criteria->compare('vivienda_hipotecada', $this->vivienda_hipotecada);
        $criteria->compare('zona_riesgo', $this->zona_riesgo);
        $criteria->compare('vali_afectacion', $this->vali_afectacion, true);
        $criteria->compare('elegible', $this->elegible);
        $criteria->compare('motivo_no_elegible', $this->motivo_no_elegible, true);
        $criteria->compare('resolucion_asignacion_fonada', $this->resolucion_asignacion_fonada);
        $criteria->compare('fecha_resolucion_asignada', $this->fecha_resolucion_asignada, true);
        $criteria->compare('solucion_vivienda_contratada', $this->solucion_vivienda_contratada);
        $criteria->compare('solucion_vivienda_ejecucion', $this->solucion_vivienda_ejecucion);
        $criteria->compare('modalidad_atencion', $this->modalidad_atencion, true);
        $criteria->compare('tipo_solucion_otorgada', $this->tipo_solucion_otorgada, true);
        $criteria->compare('caract_vivienda', $this->caract_vivienda, true);
        $criteria->compare('valor_solucion_otorgada', $this->valor_solucion_otorgada);
        $criteria->compare('num_escritura', $this->num_escritura);
        $criteria->compare('fecha_escritura', $this->fecha_escritura, true);
        $criteria->compare('notaria', $this->notaria, true);
        $criteria->compare('matricula_inmobiliaria', $this->matricula_inmobiliaria);
        $criteria->compare('fecha_entrega', $this->fecha_entrega, true);
        $criteria->compare('observaciones', $this->observaciones, true);
        $criteria->compare('codigodane', $this->codigodane, true);
        $criteria->compare('depto', $this->depto, true);
        $criteria->compare('muni', $this->muni, true);
        $criteria->compare('operador', $this->operador, true);


        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'pagination' => array(// pagination property
                        'pageSize' => 100, // page size
                    ),
                ));
    }

    public function allowCurrentUser($role) {
        $sql = "SELECT * FROM op_reunidos WHERE id_bien_afect=:idBienAfect AND operador=:Operador";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindValue(":idBienAfect", $this->id_bien_afect, PDO::PARAM_INT);
        $command->bindValue(":Operador", Yii::app()->user->Operador, PDO::PARAM_STR);
//        $command->bindValue(":projectId", $this->id, PDO::PARAM_INT);
//        $command->bindValue(":userId", Yii::app()->user->getId(), PDO::PARAM_INT);
//        $command->bindValue(":role", $role, PDO::PARAM_STR);
        return $command->execute() == 1;
    }

    protected function afterSave() {
        parent::afterSave();
        $firephp = FirePHP::getInstance(true);
        $firephp->log('OpViviendas afterSave Entrando');
        $changedvalues = http_build_query($this->attributes);
        $user = Yii::app()->user->name;
        $operador = Yii::app()->user->Operador;
        $sql = " INSERT INTO changelog (usuario, operador, changes) values ('" . $user . "', '" . $operador . "', '" . $changedvalues . "')";
        $firephp->log($sql, 'OpViviendas afterSave $sql');

        $command = Yii::app()->db->createCommand($sql);
        $command->execute();
    }
//    public function beforeSave() {
//
//
//        $firephp = FirePHP::getInstance(true);
//        $firephp->log($this->ostenta_tenencia, 'ostenta_tenencia_bs_OpViviendas');
////        if (parent::beforeSave()) {
////            if (!empty($this->ostenta_tenencia) && is_array($this->ostenta_tenencia))
////                $this->ostenta_tenencia = implode(',', $this->ostenta_tenencia);
////
////            return true;
////        }
////
////        return false;
//    }
//
//    /*
//     * Convert the flags string to array
//     */
//
//    public function afterFind() {
//        $this->ostenta_tenencia = empty($this->ostenta_tenencia) ? array() : explode(',', $this->ostenta_tenencia);
//    }
}