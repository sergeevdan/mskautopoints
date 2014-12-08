<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Mycontrolleradmin {

	public $template = 'basic';
	
	public function action_index()
	{
		$this->template->content = View::factory('admin/adminview');
	}
	
	
} // End Welcome
