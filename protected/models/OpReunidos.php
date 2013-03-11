<?php

/**
 * This is the model class for table "op_reunidos".
 *
 * The followings are the available columns in table 'op_reunidos':
 * @property integer $id_bien_afect
 * @property integer $id_registr
 * @property integer $codigo_dane
 * @property string $depto
 * @property string $mpio
 * @property string $det_territ
 * @property string $nom_centro
 * @property string $direccion
 * @property string $telefono
 * @property string $det_afecta
 * @property string $operador
 */
class OpReunidos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OpReunidos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'op_reunidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_bien_afect', 'required'),
			array('id_bien_afect, id_registr, codigo_dane', 'numerical', 'integerOnly'=>true),
			array('depto, mpio, det_territ, nom_centro, direccion, telefono, det_afecta, operador', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_bien_afect, id_registr, codigo_dane, depto, mpio, det_territ, nom_centro, direccion, telefono, det_afecta, operador', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_bien_afect' => 'ID Bien Afectado',
			'id_registr' => 'ID Registro',
			'codigo_dane' => 'Código Dane',
			'depto' => 'Departamento',
			'mpio' => 'Municipio',
			'det_territ' => 'Territorio',
			'nom_centro' => 'Nombre Centro',
			'direccion' => 'Dirección',
			'telefono' => 'Télefono',
			'det_afecta' => 'Afectación',
			'operador' => 'Operador',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_bien_afect',$this->id_bien_afect);
		$criteria->compare('id_registr',$this->id_registr);
		$criteria->compare('codigo_dane',$this->codigo_dane);
		$criteria->compare('depto',$this->depto,true);
		$criteria->compare('mpio',$this->mpio,true);
		$criteria->compare('det_territ',$this->det_territ,true);
		$criteria->compare('nom_centro',$this->nom_centro,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('det_afecta',$this->det_afecta,true);
		$criteria->compare('operador',$this->operador,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}