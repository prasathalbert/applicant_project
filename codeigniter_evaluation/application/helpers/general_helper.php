<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getFlashMsg()
{
	$CI = & get_instance();
	$ret = "";
	if($CI->phpsession->flashget("succ_msg")!="")
		$ret .= "<div class='succ_msg clear'>".$CI->phpsession->flashget("succ_msg")."</div>";	
	if($CI->phpsession->flashget("error_msg")!="")
		$ret .= "<div class='error_msg clear'>".$CI->phpsession->flashget("error_msg")."</div>";	
	return $ret;
}

function getErrorMsg($error)
{
	
	if($error["validation_error"]!="")
		return "<div class='error_msg clear'>".$error["validation_error"]."</div>";
	return;
}


?>