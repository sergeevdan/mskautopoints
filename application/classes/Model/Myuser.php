<?php defined('SYSPATH') or die('No direct script access.');

class Model_Myuser extends ORM {

	protected $_table_name = 'users';

	public function rules()
	{
		return array(
			'username' => array(
			array('not_empty'),
			array('min_length', array(':value', '5')),
			array('max_length', array(':value', '32')),
			array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
			array(array($this, 'username_unique')),
			),
			'password' => array(
			array('not_empty'),
			),
			'email' => array(
			array('not_empty'),
			array('email'),
			array(array($this, 'email_unique')),
			),
		);
	}

	public function username_unique($username)
	{
		$usertemp = ORM::factory('myuser', array('username'=>$username));
		if($usertemp->loaded())
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	public function email_unique($email)
	{
		$usertemp = ORM::factory('myuser', array('email'=>$email));
		if($usertemp->loaded())
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

} // End Welcome
