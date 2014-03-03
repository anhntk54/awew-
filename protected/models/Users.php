<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $fullName
 * @property integer $roles
 * @property string $lastAccessTime
 * @property string $lastIPAccess
 * @property integer $isBlock
 * @property string $createDate
 * @property integer $createBy
 * @property string $avatar
 * @property integer $id
 * @property integer $phone
 */
class Users extends CActiveRecord
{
	public $rememberMe;
	public $confirmPassword;
	public $newEmail;
	public $confirmNewEmail;
	public $currentPassword;
	public $newPassword;
	public $month,$day,$year;
	public $confirmNewPassword;
	private $_identity;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password', 'required'),
			array('isBlock, createBy, phone', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>50),
			array('email, password, fullName', 'length', 'max'=>255),
			array('lastIPAccess', 'length', 'max'=>20),
			array('avatar', 'length', 'max'=>500),
			array('lastAccessTime, createDate', 'safe'),
			// dang ky
			array('username,month,day,year,gender, confirmPassword, password,fullName, email', 'required', 'message'=>'{attribute} không được để trống', 'on'=>'register'),
			// array('email', 'email', 'message'=>'{attribute} không dúng định dạng', 'on'=>'register'),
			array('password,confirmPassword', 'length', 'min'=>6,'on'=>'register'),
	    	array('username, email', 'unique', 'message'=>'{attribute} đã được sử dụng', 'on'=>'register'),
			array('email', 'match', 'not'=>false, 'pattern' =>'/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', 'message' => '{attribute} chỉ sử dụng chữ cái,chữ hoa và số', 'on'=>'register'),
			//array('phone, mobilephone', 'match', 'pattern'=>'/^[0-9-()\s+]+$/'),
			array('confirmPassword', 'compare', 'compareAttribute'=>'password', 'message' => "{attribute} không chính xác", 'on'=>'register'),
			array('confirmPassword', 'safe'),
			// ChangePassword rule
			array('currentPassword, newPassword, confirmNewPassword', 'required', 'message'=>'{attribute} không được để trống', 'on'=>'changePassword'),
			// array('currentPassword', 'checkPassword', 'on'=>'changePassword'),
			array('confirmNewPassword', 'compare', 'compareAttribute'=>'newPassword', 'message' => "{attribute} không chính xác", 'on'=>'changePassword'),
			array('confirmPassword', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('username, email, password, fullName, roles, lastAccessTime, lastIPAccess, isBlock, createDate, createBy, avatar, id, phone', 'safe', 'on'=>'search'),
		);
	}
	public static function getMonthtoYear($m)
	{
		switch ($m) {
			case 'm':
				return array(
					1 => 'Tháng một',
					2 => 'Tháng hai',
					3 => 'Tháng ba',
					4 => 'Tháng tư',
					5 => 'Tháng năm',
					6 => 'Tháng sáu',
					7 => 'Tháng bảy',
					8 => 'Tháng tám',
					9 => 'Tháng chín',
					10 => 'Tháng mười',
					11 => 'Tháng mười một',
					12 => 'Tháng hai',
				);
				break;
			case 'd':
				$arr = array();
				for ($i=1; $i < 32 ; $i++) { 
					$arr[$i] = $i;
				}
				return $arr;
				break;
			case 'y':
				$y = date('Y');
				$arr = array();
				for ($i=$y; $i >= 1950 ; $i--) { 
					$arr[$i] = $i;
				}
				return $arr;
				break;
		}
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
	// kiem tra phan quyen nguoi dung, 0 la nguoi dung, 1 la admin
	public function isUsers($id)
	{
		if (Yii::app()->user->isGuest) {
			return -1;
		}
        if(!isset($id)){
            return -1;
        }
		$user = Users::model()->findByPk($id);
		return $user->roles;
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'username' => 'Username',
			'email' => 'Email',
			'password' => 'Password',
			'fullName' => 'Full Name',
			'roles' => 'Roles',
			'lastAccessTime' => 'Last Access Time',
			'lastIPAccess' => 'Last Ipaccess',
			'isBlock' => 'Is Block',
			'createDate' => 'Create Date',
			'createBy' => 'Create By',
			'avatar' => 'Avatar',
			'id' => 'id',
			'phone' => 'Phone',
		);
	}
	
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('fullName',$this->fullName,true);
		$criteria->compare('roles',$this->roles);
		$criteria->compare('lastAccessTime',$this->lastAccessTime,true);
		$criteria->compare('lastIPAccess',$this->lastIPAccess,true);
		$criteria->compare('isBlock',$this->isBlock);
		$criteria->compare('createDate',$this->createDate,true);
		$criteria->compare('createBy',$this->createBy);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('phone',$this->phone);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    // function get name
    public function getName($id){
        $model = Users::model()->findByPk($id);
        if($model===null){
			throw new CHttpException(404,'The requested page does not exist.');
        }else{
            return $model->username;
        }
            
    }
}
