<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

	public $template = 'basic';
	
	public function action_index()
	{
				
		//Авторизация
		$auth = Auth::instance();
		$data = array();
		
		if ($auth->logged_in())
		{
			//$this->template->content = View::factory('home', $data);
		}
		else
		{
			if (isset($_POST['loginSubmit']))
			{
				$login = Arr::get($_POST, 'login', '');
				$password = Arr::get($_POST, 'password', '');
				
				if($auth->login($login, $password))
				{
					$session = Session::instance();
					$auth_redirect = $session->get('auth_redirect', '');
					$session->delete('auth_redirect');
					
					Controller::redirect($auth_redirect);
				}
				else
				{
					$data["error"] = "";
				}
			}
			//$this->template->content = View::factory('authview');
	
                }
                
                $data = array();
		if (isset($_POST['regSubmit']))
		{	
			$username = Arr::get($_POST, 'username', '');
			$email = Arr::get($_POST, 'email', '');
			$password = Arr::get($_POST, 'password', '');
			
			$register = new Model_Register();
			if($register->reg($username, $email, $password, 1))
			{
				$data["success"] = "";
			}
			else
			{
				$data["errorss"] = $register->errorss;
			}
		}
		
		// $this->template->content = View::factory('forms/regview', $data);
		
	}
	
	public function action_hpass()
	{
		$auth = Auth::instance();
		$this->template->content = $auth->hash_password('4155246');
	}
	/*
	public function action_regis()
	{
	// Регистрация
		
		
		if (isset($_POST['regSubmit']))
		{	
			$username = Arr::get($_POST, 'username', '');
			$email = Arr::get($_POST, 'email', '');
			$password = Arr::get($_POST, 'password', '');
			
			$register = new Model_Register();
			if($register->reg($username, $email, $password, 1))
			{
				$data["success"] = "";
			}
			else
			{
				$data["errors"] = $register->errors;
			}
		}
		
		$this->template->content = View::factory('regview');
	}

 public function action_reg()
	{
		$data = array();
		if (isset($_POST['regSubmit']))
		{	
			$username = Arr::get($_POST, 'username', '');
			$email = Arr::get($_POST, 'email', '');
			$password = Arr::get($_POST, 'password', '');
			
			$register = new Model_Register();
			if($register->reg($username, $email, $password, 1))
			{
				$data["success"] = "";
			}
			else
			{
				$data["errors"] = $register->errors;
			}
		}
		
		$this->template->content = View::factory('regview', $data);
		
	}
	 */
} // End Welcome
