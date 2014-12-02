<?php 

class Index_Controller
	extends Controller_Abstract
{

	public function __construct()
	{
		
	}
	
	public function indexAction()
	{
		$data = array(
			'title' => 'DevXIII', 
			'page'  => 'index',
		);
		
		$this->view('index', $data)->load();
	}
}

