<?php

/**
 * This is the model class for table "codigodane".
 *
 * The followings are the available columns in table 'codigodane':
 * @property integer $codigodane
 * @property string $depto_dane
 * @property string $muni_dane
 * @property string $depto_reu
 * @property string $muni_reu
 * @property string $entidad_territorial
 */
class Codigodane extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Codigodane the static model class
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
		return 'codigodane';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigodane, depto_dane, muni_dane, entidad_territorial', 'required'),
			array('codigodane', 'numerical', 'integerOnly'=>true),
			array('depto_dane, muni_dane, depto_reu, muni_reu, entidad_territorial', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('codigodane, depto_dane, muni_dane, depto_reu, muni_reu, entidad_territorial', 'safe', 'on'=>'search'),
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
			'codigodane' => 'Codigodane',
			'depto_dane' => 'Depto Dane',
			'muni_dane' => 'Muni Dane',
			'depto_reu' => 'Depto Reu',
			'muni_reu' => 'Muni Reu',
			'entidad_territorial' => 'Entidad Territorial',
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

		$criteria->compare('codigodane',$this->codigodane);
		$criteria->compare('depto_dane',$this->depto_dane,true);
		$criteria->compare('muni_dane',$this->muni_dane,true);
		$criteria->compare('depto_reu',$this->depto_reu,true);
		$criteria->compare('muni_reu',$this->muni_reu,true);
		$criteria->compare('entidad_territorial',$this->entidad_territorial,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}