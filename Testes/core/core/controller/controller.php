<?php 
/**
 * Controller Abstract for the app
 * 
 */
abstract class Controller_Abstract 
{	
	public function view( $viewname, $data = array() )
	{
		$this->viewName = $viewname;
		foreach( $data as $key => $value ):
			$this->$key = $value;
		endforeach;
		return $this;
	}
	
	public function load()
	{
		$this;
		if( file_exists('app/View/'.$this->viewName.'.phtml') ):
			require_once( 'app/View/'.$this->viewName.'.phtml' );
			return true;
		endif;
		require_once( 'app/View/404.phtml' );
		return false;
	}
}
