<?php 

class Twitter_Helper {
	
	//$append @ sign
	static function getHandle($twitter_url,$append = true ){
	
		if(empty($twitter_url))	return '';
			
		preg_match("/(http:|https:)?(\/\/)?(www|m|mobile)?(\.)?twitter.com\/(#!\/)?@?([^\/]*)/", $twitter_url, $matches);

		if($matches == false || !is_array($matches)) return '';
		
		if(!isset($matches[6]) || empty($matches[6]) || strlen($matches[6]) <= 3) return '';
		
		if(in_array($matches[6],array('search','discover','hashtag','following','followers','i','#'))) return '';
		
		if(strpos($matches[6],'?') !== false) $matches[6] = substr($matches[6],0,strpos($matches[6],'?'));
			
		return ($append ? '@':'').$matches[6];
	
	}
	
	

}
