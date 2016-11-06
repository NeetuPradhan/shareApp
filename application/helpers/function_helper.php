<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('prePrint')) {
	function prePrint($pre,$die = TRUE){
		print '<pre>'; print_r($pre);print '</pre>';
		if($die===TRUE) die();
	}
}

if(!function_exists('getBackendUrl')){
	function getBackendUrl() {
		return base_url().'backend/';
	}
}

if(!function_exists('getRegisterUrl')){
	function getRegisterUrl() {
		return base_url().'register/';
	}
}

if(!function_exists('getHomeUrl')){
	function getHomeUrl() {
		return base_url().'home/';
	}
}

if(!function_exists('getAuthUrl')){
	function getAuthUrl() {
		return base_url().'auth/';
	}
}