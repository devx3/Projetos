<?php

class URL {

	public static function getUrl(){
		return self::_handleUrl();
	}

	protected static function _handleUrl() {
		return $_url = ( isset($_GET['url']) ) ? $_GET['url'] : 'index';
	}

}
