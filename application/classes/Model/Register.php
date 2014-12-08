<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register
{
	
	public function reg($username, $email, $password, $role)
	{
		
			$myuser = new Model_Myuser();
                        $useful = new Model_Useful();
                        
		
		// Создаем myuser
		$myuser->username = $username;
		$myuser->email = $email;
		$myuser->password = Auth::instance()->hash_password($password);
		
		try
		{
			$myuser->save();
			
			$usertemp = ORM::factory('myuser', array('username'=>$username));
			$adduserid = $usertemp->id;
			
			//Сохранение роли
			$addrole = new Model_Addrole();
			$addrole->user_id = $adduserid;
			$addrole->role_id = $role;
			$addrole->save();
                        
                        //Отправка email
                        $config = Kohana::$config->load('email');
                        email::connect($config);
    
                        $from = 'info@mskautopoints.ru';
                        $subject = 'Регистрация на сайте MskAutoPoints';
                        $message = "Благодарим вас за регистрацию на сайте MskAutoPoints! Ваш логин: $username Ваш пароль: $password";
                        $useful->sendemail($email, $from, $subject, $message);
			
			return TRUE;
		}
		catch(ORM_Validation_Exception $e)
		{
			$this->errorss = $e->errors("orm-validation");
			return FALSE;
		}
	
	}
} // End Welcome
