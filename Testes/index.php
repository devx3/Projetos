<?php 

/**
 * URL of application
 */
$url = ( !isset($_GET['url']) ) ? array( 'Index', 'index' ) : explode('/', $_GET['url'].'/');

/**
 * Loading core application
 */
require_once('core/controller/controller.php');

/**
 * Set up the router
 */
$controller = $url[0];
$method 	= ('' !== $url[1]) ? $url[1].'Action' : 'indexAction';

/**
 * Autoloading the controller
 */
function __autoload( $class )
{
	if( file_exists('app/Controller/'.$class.'.php') ):
		require_once('app/Controller/'.$class.'.php');
	else:
		require_once('app/View/pages/404.phtml');
	endif;
}

/**
 * The pattern: Controller must be like that "Example_Controller.php ( with CamelCase )"
 * So the app read the first parameter in URL:
 * http://www.ex.com/controller/action
 * 						|
 * 						+--> This name will be concatenate with "_Controller" 
 * When you create the controller file you must create with this pattern otherwise your app doesn't work
 */
$controller = ucfirst($controller.'_Controller');

/**
 * Instantiate the controller class called by the router (URL)
 */
$router = new $controller();

/**
 * The second parameter is the action (or method) and must be like "public function methodAction()..."
 */
$router->$method();
