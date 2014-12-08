<?php defined('SYSPATH') or die('No direct script access.');

class Mycontrolleradmin extends Controller_Template {

	
	public function before()
	{
		$session = Session::instance();
		$session->set('auth_redirect', $_SERVER['REQUEST_URI']);
		
		$auth = Auth::instance();
                if($auth->logged_in('admin') == 0) Controller::redirect('noneRules');
                
		return parent::before();
	}

} // End Welcome
