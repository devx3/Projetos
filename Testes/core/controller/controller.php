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
		require_once( 'app/View/'.$this->viewName.'.phtml' );
	}
}
