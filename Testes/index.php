<?php 


/**
 * Loading core application
 */
require_once('core/core/controller/controller.php');
require_once('core/url/controller/url.php');
require_once('core/core/etc/config.php');
/**
 * Set up the router
 */
 
$url = explode('/', URL::getUrl());

$controller = $url[0];
$method 	= (isset($url[1]) && '' != $url[1] ) ? $url[1].'Action' : 'indexAction';

/**
 * The pattern: Controller must be like that "Example_Controller.php ( with CamelCase )"
 * So the app read the first parameter in URL:
 * http://www.ex.com/controller/action
 * 						|
 * 						+--> This name will be concatenate with "_Controller" 
 * When you create the controller file you must create with this pattern otherwise your app doesn't work
 */
$controller = ucfirst($controller.'_Controller');

if( !class_exists($controller) )
{
	$controller = 'error404_Controller';
}

/**
 * Autoloading the controller
 */
function __autoload( $class )
{
	if( file_exists('app/Controller/'.$class.'.php') ):
		require_once('app/Controller/'.$class.'.php');
	else:
		require_once('app/Controller/error404_Controller.php');
	endif;
}

/**
 * Instantiate the controller class called by the router (URL)
 */
$router = new $controller();

if( !method_exists($router, $method) )
{
	$method = 'indexAction';
}

/**
 * Check if has params for the method
 */
$params = '';
if( isset($url[2]) )
{
	$params = $url[2];
}

/**
 * The second parameter is the action (or method) and must be like "public function methodAction()..."
 */
$router->$method( $params );
