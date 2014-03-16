<?php
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $_identity;
	public $rememberMe;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('username, password', 'required'),
			array('username', 'match', 'not'=>false, 'pattern' =>'/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*(@([a-z0-9\-]+\.)+[a-z]{2,6})?$/ix', 'message' => '{attribute} không đúng định dạng'),
			array('password', 'length', 'min'=>6),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}

	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new Useridentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===Useridentity::ERROR_NONE)
		{

			$duration=  0; // 30 days
			if($this->rememberMe == 1){
				$duration= 3600*24*30 ; // 30 days
			}
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}