<?php

define('DS', DIRECTORY_SEPARATOR);
define('PHPEXT', '.php');
define('PHTMLEXT', '.phtml');

define('CONT_PREFIX', 'Controller');
define('MODL_PREFIX', 'Model');
define('VIEW_PREFIX', '');

define('ROOTPATH', __DIR__.DS.'..'.DS);
define('APPPATH', ROOTPATH.'app'.DS);
define('CONTROLLER_PATH', APPPATH.'Controller'.DS);
define('MODEL_PATH', APPPATH.'Model'.DS);
define('VIEW_PATH', APPPATH.'View'.DS);

define('PUBLIC_HTML', ROOTPATH.'public');