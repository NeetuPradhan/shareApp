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

if(!function_exists('getMemberUrl')){
	function getMemberUrl() {
		return base_url().'member/';
	}
}

if(!function_exists('getHomeUrl')){
	function getHomeUrl() {
		return base_url().'home/';
	}
}

if(!function_exists('getCompanyUrl')){
	function getCompanyUrl() {
		return base_url().'company/';
	}
}

if (!function_exists('formatDateTime')) {
	function formatDateTime($dateTime, $format = 'Y-m-d') {
        if(!empty($dateTime)){
            if ($dateTime = new DateTime($dateTime)) {
                return $dateTime->format($format);
            }
        }
        return NULL;
    }
}

if(!function_exists('getAnnouncementUrl')){
	function getAnnouncementUrl() {
		return base_url().'announcement/';
	}
}

if(!function_exists('getNewsUrl')){
	function getNewsUrl() {
		return base_url().'news/';
	}
}