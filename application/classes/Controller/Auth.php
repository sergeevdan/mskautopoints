<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {

	public $template = 'basic';
	
	public function action_index()
	{
		
        }
	
	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		Controller::redirect('');
	}
	


} // End Welcome
