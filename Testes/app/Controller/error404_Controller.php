<?php

class error404_Controller 
	extends Controller_Abstract {
	
	public function indexAction()
	{
		$data = array(
			'title' => 'DevXIII | Error 404', 
			'page'  => '404',
		);
		
		$this->view('index', $data)->load();
	}	
}
