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
			'title'    => 'DevXIII', 
			'page'     => 'index',
		);

		$output = explode("\n", shell_exec('df -h /home/'));
		
		$data['winfiles'] = $output;
		
		$this->view('index', $data)->load();
	}
	
	public function oopJsAction()
	{
		$data = array(
			'title'    => 'DevXIII', 
			'page'     => 'oopjs',
		);
		
		$this->view('index', $data)->load();
	}
	
	public function cliAjaxAction( $cmd ){
		
		//echo gettype($cmd);
		echo shell_exec($cmd);
		
	}
}

