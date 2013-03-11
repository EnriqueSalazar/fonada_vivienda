<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $usuario
 * @property string $password
 * @property string $email
 * @property string $tipo
 * @property string $operador
 * @property string $lastlogin
 * @property string $creado
 * @property string $actualizado
 */
class Users extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Users the static model class
     */
    public $password_repeat;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('password', 'compare'),
            array('usuario, password, password_repeat, email, tipo, operador', 'required'),
            array('usuario, email, tipo, operador', 'length', 'max' => 50),
            array('password, password_repeat', 'length', 'min' => 6, 'max' => 40),
            array('password', 'length', 'max' => 11),
            array('email, usuario', 'unique'),
            array('lastlogin, creado, actualizado', 'safe'),
            array('password_repeat', 'safe'),
            array('email', 'email', 'checkMX' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, usuario, password, email, tipo, operador, lastlogin, creado, actualizado', 'safe', 'on' => 'search'),
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
            'usuario' => 'Usuario',
            'password' => 'Password',
            'email' => 'Email',
            'tipo' => 'Tipo',
            'operador' => 'Operador',
            'lastlogin' => 'Lastlogin',
            'creado' => 'Creado',
            'actualizado' => 'Actualizado',
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
        $criteria->compare('usuario', $this->usuario, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('tipo', $this->tipo, true);
        $criteria->compare('operador', $this->operador, true);
        $criteria->compare('lastlogin', $this->lastlogin, true);
        $criteria->compare('creado', $this->creado, true);
        $criteria->compare('actualizado', $this->actualizado, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * apply a hash on the password before we store it in the database
     */
    protected function afterValidate() {
        parent::afterValidate();
        if (!$this->hasErrors())
            $this->password = $this->hashPassword($this->password);
    }

    /**
     * Generates the password hash.
     * @param string password
     * @return string hash
     */
    public function hashPassword($password) {
        return md5($password);
    }

    /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public function validatePassword($password) {
//        echo Yii::trace(CVarDumper::dumpAsString($password), 'vardump');
//        echo Yii::trace(CVarDumper::dumpAsString($this->hashPassword($password)), 'vardump');
//        echo Yii::trace(CVarDumper::dumpAsString($this->password), 'vardump');
        return $this->hashPassword($password) === $this->password;
    }

}