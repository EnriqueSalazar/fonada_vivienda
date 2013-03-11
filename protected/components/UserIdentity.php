<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

//	/**
//	 * Authenticates a user.
//	 * The example implementation makes sure if the username and password
//	 * are both 'demo'.
//	 * In practical applications, this should be changed to authenticate
//	 * against some persistent user identity storage (e.g. database).
//	 * @return boolean whether authentication succeeds.
//	 */
//	public function authenticate()
//	{
//		$users=array(
//			// username => password
//			'demo'=>'demo',
//			'admin'=>'admin',
//		);
//		if(!isset($users[$this->username]))
//			$this->errorCode=self::ERROR_USERNAME_INVALID;
//		elseif($users[$this->username]!==$this->password)
//			$this->errorCode=self::ERROR_PASSWORD_INVALID;
//		else
//			$this->errorCode=self::ERROR_NONE;
//		return !$this->errorCode;
//	}
//    -----------------------------------------------
    private $_id;

    public function authenticate() {
        $user = Users::model()->find('LOWER(usuario)=?', array(strtolower($this->username)));
        echo Yii::trace(CVarDumper::dumpAsString($user), 'vardump');
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        //echo Yii::trace(CVarDumper::dumpAsString('usernull'),'vardump');
        else if (!$user->validatePassword($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        //echo Yii::trace(CVarDumper::dumpAsString('validatePassword'),'vardump');
        else {
            $this->_id = $user->id;
            $this->username = $user->usuario;
            //$this->operador = $user->operador;
            $this->setState('Operador', $user->operador);
            $this->setState('Rol', $user->tipo);
            $this->setState('lastLogin', date("m/d/y g:i A", strtotime($user->lastlogin)));
            $user->saveAttributes(array(
                'lastlogin' => date("Y-m-d H:i:s", time()),
            ));
            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    public function getId() {
        return $this->_id;
    }

}