<?php

/**
 * This is the model class for table "query".
 *
 * The followings are the available columns in table 'query':
 * @property integer $id
 * @property double $id_bien_afectado
 * @property double $regi_id_registro
 * @property string $Municipio
 * @property string $Departamento
 * @property double $dear_id_tipo_bien
 * @property double $dear_id_estado
 * @property string $nombres_apellidos
 * @property double $numero_documento
 * @property double $dear_id_parentesco
 * @property double $dear_id_forma_tenencia
 * @property string $parentesco
 * @property string $tenencia
 * @property string $territorio
 * @property string $afectacion
 * @property string $direccion
 * @property string $nombre_autoriza
 * @property double $numero_cedula
 * @property double $tel_1_autoriza
 * @property double $tel_2_autoriza
 * @property double $correo_autoriza
 * @property string $nombre_contacto
 * @property double $tel_1_contacto
 * @property double $tel_2_cantacto
 * @property string $nombre_centro_poblado
 * @property string $ubicacion_bien
 * @property double $dear_id_afectacion
 * @property double $dear_id_territorio
 */
class Query extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Query the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'query';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_bien_afectado, regi_id_registro, dear_id_tipo_bien, dear_id_estado, numero_documento, dear_id_parentesco, dear_id_forma_tenencia, numero_cedula, tel_1_autoriza, tel_2_autoriza, correo_autoriza, tel_1_contacto, tel_2_cantacto, dear_id_afectacion, dear_id_territorio', 'numerical'),
            array('Municipio, Departamento, nombres_apellidos, parentesco, tenencia, territorio, afectacion, direccion, nombre_autoriza, nombre_contacto, nombre_centro_poblado, ubicacion_bien', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, id_bien_afectado, regi_id_registro, Municipio, Departamento, dear_id_tipo_bien, dear_id_estado, nombres_apellidos, numero_documento, dear_id_parentesco, dear_id_forma_tenencia, parentesco, tenencia, territorio, afectacion, direccion, nombre_autoriza, numero_cedula, tel_1_autoriza, tel_2_autoriza, correo_autoriza, nombre_contacto, tel_1_contacto, tel_2_cantacto, nombre_centro_poblado, ubicacion_bien, dear_id_afectacion, dear_id_territorio', 'safe', 'on' => 'search'),
        );
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
            'regi_id_registro' => 'Regi Id Registro',
            'Municipio' => 'Municipio',
            'Departamento' => 'Departamento',
            'dear_id_tipo_bien' => 'Dear Id Tipo Bien',
            'dear_id_estado' => 'Dear Id Estado',
            'nombres_apellidos' => 'Nombres Apellidos',
            'numero_documento' => 'Numero Documento',
            'dear_id_parentesco' => 'Dear Id Parentesco',
            'dear_id_forma_tenencia' => 'Dear Id Forma Tenencia',
            'parentesco' => 'Parentesco',
            'tenencia' => 'Tenencia',
            'territorio' => 'Territorio',
            'afectacion' => 'Afectacion',
            'direccion' => 'Direccion',
            'nombre_autoriza' => 'Nombre Autoriza',
            'numero_cedula' => 'Numero Cedula',
            'tel_1_autoriza' => 'Tel 1 Autoriza',
            'tel_2_autoriza' => 'Tel 2 Autoriza',
            'correo_autoriza' => 'Correo Autoriza',
            'nombre_contacto' => 'Nombre Contacto',
            'tel_1_contacto' => 'Tel 1 Contacto',
            'tel_2_cantacto' => 'Tel 2 Cantacto',
            'nombre_centro_poblado' => 'Nombre Centro Poblado',
            'ubicacion_bien' => 'Ubicacion Bien',
            'dear_id_afectacion' => 'Dear Id Afectacion',
            'dear_id_territorio' => 'Dear Id Territorio',
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
        $criteria->compare('id_bien_afectado', $this->id_bien_afectado);
        $criteria->compare('regi_id_registro', $this->regi_id_registro);
        $criteria->compare('Municipio', $this->Municipio, true);
        $criteria->compare('Departamento', $this->Departamento, true);
        $criteria->compare('dear_id_tipo_bien', $this->dear_id_tipo_bien);
        $criteria->compare('dear_id_estado', $this->dear_id_estado);
        $criteria->compare('nombres_apellidos', $this->nombres_apellidos, true);
        $criteria->compare('numero_documento', $this->numero_documento);
        $criteria->compare('dear_id_parentesco', $this->dear_id_parentesco);
        $criteria->compare('dear_id_forma_tenencia', $this->dear_id_forma_tenencia);
        $criteria->compare('parentesco', $this->parentesco, true);
        $criteria->compare('tenencia', $this->tenencia, true);
        $criteria->compare('territorio', $this->territorio, true);
        $criteria->compare('afectacion', $this->afectacion, true);
        $criteria->compare('direccion', $this->direccion, true);
        $criteria->compare('nombre_autoriza', $this->nombre_autoriza, true);
        $criteria->compare('numero_cedula', $this->numero_cedula);
        $criteria->compare('tel_1_autoriza', $this->tel_1_autoriza);
        $criteria->compare('tel_2_autoriza', $this->tel_2_autoriza);
        $criteria->compare('correo_autoriza', $this->correo_autoriza);
        $criteria->compare('nombre_contacto', $this->nombre_contacto, true);
        $criteria->compare('tel_1_contacto', $this->tel_1_contacto);
        $criteria->compare('tel_2_cantacto', $this->tel_2_cantacto);
        $criteria->compare('nombre_centro_poblado', $this->nombre_centro_poblado, true);
        $criteria->compare('ubicacion_bien', $this->ubicacion_bien, true);
        $criteria->compare('dear_id_afectacion', $this->dear_id_afectacion);
        $criteria->compare('dear_id_territorio', $this->dear_id_territorio);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'pagination' => array(// pagination property
                        'pageSize' => 100, // page size
                    ),
                ));
    }

}