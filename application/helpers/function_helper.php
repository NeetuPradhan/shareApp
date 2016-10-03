<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('prePrint')) {
	function prePrint($pre,$die = TRUE){
		print '<pre>'; print_r($pre);print '</pre>';
		if($die===TRUE) die();
	}
}

if(!function_exists('getBackendUrl')){
	function getBackendUrl($file=true) {
		return base_url().'backend/';
	}
}