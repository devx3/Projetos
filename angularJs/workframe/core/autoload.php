<?php

function __autoload( $classname ){

	if( file_exists(CONTROLLER_PATH.$classname.CONT_PREFIX.PHPEXT) ){
            require_once(CONTROLLER_PATH.$classname.CONT_PREFIX.PHPEXT);
	}
}
