<?php

class Session{
	
	/**
	 * @return nothing
	 **/
	public static function init(){
		@session_start();	
	}
	
	/**
	 * @param string $key The key for the session array
	 * @param string $value The value of the session array
	 * @return nothing
	 **/
	public static function set($key, $value){
		session_start();
		$_SESSION[$key] = $value;
	}
	
	/**
	 * @param string $key The key for the session array value
	 * @return string $_SESSION[$key] 
	 **/
	public static function get($key){
		if(isset($_SESSION[$key]))
		return $_SESSION[$key];
	}
	
	/**
	 * @return nothing
	 **/
	public static function destroy(){
		// unset($_SESSION[]);
		session_destroy();
	}
}