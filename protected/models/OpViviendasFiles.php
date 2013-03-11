<?php

/**
 * This is the model class for table "op_viviendas_files".
 *
 * The followings are the available columns in table 'op_viviendas_files':
 * @property integer $id
 * @property integer $id_bien_afect
 * @property string $filename
 * @property string $usuario
 * @property string $operador
 * @property string $miembro
 */
class OpViviendasFiles extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OpViviendasFiles the static model class
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
		return 'op_viviendas_files';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_bien_afect, filename, usuario, operador', 'required'),
			array('id_bien_afect', 'numerical', 'integerOnly'=>true),
			array('filename, usuario, operador, miembro', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_bien_afect, filename, usuario, operador, miembro', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'id_bien_afect' => 'Id Bien Afect',
			'filename' => 'Filename',
			'usuario' => 'Usuario',
			'operador' => 'Operador',
			'miembro' => 'Miembro',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('id_bien_afect',$this->id_bien_afect);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('operador',$this->operador,true);
		$criteria->compare('miembro',$this->miembro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}