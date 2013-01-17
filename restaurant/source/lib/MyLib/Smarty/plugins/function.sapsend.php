<?php

function smarty_function_sapsend($params, &$smarty)
{
	if (!Zend_Registry::isRegistered('MBGA_USER')) {
		return null;
	}
	
	//sb.pf.mbga.jp
	//$SA_API_KEY = '207';
	//$SA_SECRET_KEY = '7d9830c1';
	
	//pf.mbga.jp
	$SA_API_KEY = '228';
	$SA_SECRET_KEY = '61f7f23d';
	
	$SA_API_URL = 'http://bsap.nakanohito.jp/';   
	$SA_VERSION = 'v1';
	
	$sig = null;   
	$params['ts']= gmdate("Y-m-d+H:i:s");   
	if( !isset($params['tp']) ) $params['tp'] = 'i';
	if( $params['tp'] == 'i' )  $params['guid'] = 'ON';
	
	//set user info 
	$user = Zend_Registry::get('MBGA_USER');
	if( !isset($params['vi']) ) $params['vi'] = $user->getId();   
	if( !isset($params['ag']) ) $params['ag'] = $user->getAge();
	if( !isset($params['gn']) ) $params['gn'] = $user->getField('gender') == 'MALE' ? 1 : 0; 
	
	if( !isset($params['rv']) ) $params['rv'] = 1;
	
	parse_str(http_build_query($params,'', '&'), $formatted_params);   
	ksort($formatted_params);   
	
	foreach ($formatted_params as $key =>$val) {
		$sig .= $key.'='.urlencode($val).'&';
	}
	
	$formatted_params['sg'] = md5($sig.$SA_SECRET_KEY);
	$query = http_build_query($formatted_params, '', '&'.'amp;');
	$url = $SA_API_URL . $SA_VERSION .'/'. $SA_API_KEY .'/aca/?'. $query;
	
	if( $params['tp'] == 'i' ) {   
		return '<img src="'.$url.'" width="1" height="1" alt="" />';   
	} else {   
		file_get_contents($url);   
	}   
} 

?>