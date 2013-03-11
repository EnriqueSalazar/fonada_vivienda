<?php

/**
 * This is the model class for table "op_hogares".
 *
 * The followings are the available columns in table 'op_hogares':
 * @property integer $id
 * @property string $id_bien_afectado
 * @property string $nombres_apellidos
 * @property string $apellido1
 * @property string $apellido2
 * @property string $nombre1
 * @property string $nombre2
 * @property integer $numero_documento
 * @property string $tipo_documento
 * @property string $parentesco
 * @property integer $ostenta_tenencia
 * @property string $tipo_tenencia
 * @property string $estado_civil
 * @property integer $edad
 * @property string $sexo
 * @property string $ocupacion
 * @property integer $ingresos_mensuales
 * @property string $poblacion_especial
 * @property string $observaciones
 * @property integer $existe
 */
class OpHogares extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OpHogares the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'op_hogares';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('numero_documento, edad, ingresos_mensuales, existe', 'numerical', 'integerOnly' => true),
            array('id_bien_afectado', 'length', 'max' => 20),
            array('nombres_apellidos', 'length', 'max' => 255),
            array('apellido1, apellido2, nombre1, nombre2, tipo_documento, parentesco, tipo_tenencia, estado_civil, sexo, ocupacion, poblacion_especial', 'length', 'max' => 100),
            array('observaciones', 'safe'),
            array('ostenta_tenencia', 'checkArray'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('apellido1, apellido2, nombre1, nombre2, id, id_bien_afectado, nombres_apellidos, numero_documento, tipo_documento, parentesco, ostenta_tenencia, tipo_tenencia, estado_civil, edad, sexo, ocupacion, ingresos_mensuales, poblacion_especial, observaciones, existe', 'safe', 'on' => 'search'),
            array('tipo_documento', 'in', 'range' => array('Cedula', 'Tarjeta de identidad'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('estado_civil', 'in', 'range' => array('Soltero', 'Casado', 'Viudo', 'Divorciado', 'Union libre'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('sexo', 'in', 'range' => array('Masculino', 'Femenino'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('ocupacion', 'in', 'range' => array('Empleado', 'Independiente', 'Estudiante', 'Ama de casa', 'Desempleado', 'Otro'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('poblacion_especial', 'in', 'range' => array('Madre comunitaria', 'Afrocolombiano', 'Rom', 'Indigena', 'Desplazado', 'Discapacitado', 'Tercera edad'), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
//            array('', 'in', 'range' => array('', '', ''), 'message' => 'Valor no se encuentra entre las opciones disponibles'),
            array('id_bien_afectado', 'isAuth'),
        );
    }

    public function isAuth($attribute) {
//        $firephp = FirePHP::getInstance(true);
//                $firephp->log($this->$attribute, 'OpHogares isAuth $this->$attribute');
        $id = $this->id_bien_afectado;
        $useroperador = Yii::app()->user->Operador;
        $parentmodel = OpViviendas::model()->findByAttributes(array('id_bien_afec' => $id, 'operador' => $useroperador));

//        $firephp->log($parentmodel, 'OpHogares isAuth $parentmodel');
//        if ($parentmodel->)
//        $firephp->log($lavivienda->attributes, 'OpHogares isAuth $parentmodel attributes');
//        $firephp->log($lavivienda->attributes['operador'], 'OpHogares isAuth $parentmodel attributes operador');
//        if (empty($parentmodel->getAttribute('operador'))==true){
//            $theoperador=0;
//        }
//        else{
//            $theoperador=$parentmodel->getAttribute('operador');
//        }
//        $theoperador = $parentmodel->attributes['operador'];
//        $firephp->log($theoperador, 'OpHogares isAuth $theoperador');
        if (empty($parentmodel) == true) {
            $this->addError($attribute, 'Registro no autorizado');
//            $firephp->log($this->getErrors(), 'OpHogares isAuth $this->getErrors');
        }
    }

    public function checkArray($attribute) {
        if (!empty($this->$attribute) && !is_array($this->$attribute))
            $this->addError($this->$attribute, 'Must be an array');
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
            'id' => 'ID',
            'id_bien_afectado' => 'Id Bien Afectado',
//            'nombres_apellidos' => 'Nombres Apellidos',
            'apellido1' => 'Primer Apellido',
            'apellido2' => 'Segundo Apellido',
            'nombre1' => 'Primer Nombre',
            'nombre2' => 'Segundo Nombre',
            'numero_documento' => 'Numero Documento',
            'tipo_documento' => 'Tipo Documento',
            'parentesco' => 'Parentesco',
            'ostenta_tenencia' => 'Ostenta Tenencia',
            'tipo_tenencia' => 'Tipo Tenencia',
            'estado_civil' => 'Estado Civil',
            'edad' => 'Edad',
            'sexo' => 'Sexo',
            'ocupacion' => 'Ocupacion',
            'ingresos_mensuales' => 'Ingresos Mensuales',
            'poblacion_especial' => 'Poblacion Especial',
            'observaciones' => 'Observaciones',
            'existe' => 'Existe',
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

        $criteria->compare('id', $this->id);
        $criteria->compare('id_bien_afectado', $this->id_bien_afectado, true);
//        $criteria->compare('nombres_apellidos', $this->nombres_apellidos, true);
        $criteria->compare('apellido1', $this->apellido1, true);
        $criteria->compare('apellido2', $this->apellido2, true);
        $criteria->compare('nombre1', $this->nombre1, true);
        $criteria->compare('nombre2', $this->nombre2, true);
        $criteria->compare('numero_documento', $this->numero_documento, true);
        $criteria->compare('tipo_documento', $this->tipo_documento, true);
        $criteria->compare('parentesco', $this->parentesco, true);
        $criteria->compare('ostenta_tenencia', $this->ostenta_tenencia);
        $criteria->compare('tipo_tenencia', $this->tipo_tenencia, true);
        $criteria->compare('estado_civil', $this->estado_civil, true);
        $criteria->compare('edad', $this->edad);
        $criteria->compare('sexo', $this->sexo, true);
        $criteria->compare('ocupacion', $this->ocupacion, true);
        $criteria->compare('ingresos_mensuales', $this->ingresos_mensuales);
        $criteria->compare('poblacion_especial', $this->poblacion_especial, true);
        $criteria->compare('observaciones', $this->observaciones, true);
        $criteria->compare('existe', $this->existe);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /*
     * Convert the flags array to string
     */

    public function beforeSave() {
        $firephp = FirePHP::getInstance(true);
        $firephp->log('--------------------------------------------------');
        $firephp->log('beforeSave');

        $firephp->log($this->ostenta_tenencia, 'ostenta_tenencia_bs_OpHogares');
        //$firephp->log($this, 'OpHogares');

        if (parent::beforeSave()) {
//            if (!empty($this->ostenta_tenencia) && is_array($this->ostenta_tenencia)) {
            if (is_array($this->ostenta_tenencia)) {

                $firephp->log('going to Implode');

                $this->ostenta_tenencia = implode(',', $this->ostenta_tenencia);
            }
            $firephp->log($this->ostenta_tenencia, 'ostenta_tenencia_bs_OpHogares_implode');
            $firephp->log('true--------------------------------------------------');
            return true;
        }
        $firephp->log('false--------------------------------------------------');
        return false;
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
    
    /*
     * Convert the flags string to array
     */

    public function afterFind() {
//        $firephp = FirePHP::getInstance(true);
//        $firephp->log($this->ostenta_tenencia, 'ostenta_tenencia_af');
        $this->ostenta_tenencia = empty($this->ostenta_tenencia) ? array() : explode(',', $this->ostenta_tenencia);
    }

}