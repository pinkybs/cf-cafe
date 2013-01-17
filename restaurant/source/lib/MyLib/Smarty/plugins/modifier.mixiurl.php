<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty format url to mbga url
 *
 * Type:     modifier
 * Name:     mbgaurl
 * Purpose:  Smarty format url to mbga url for mobile
 * @author   huch
 * @param    string url
 * @return   string mixi url
 */
function smarty_modifier_mixiurl($url)
{
    return $url;
    
    $joinchar = (stripos($url,'?') === false) ? '?' : '&';
    if (Zend_Registry::get('ua') == 0 && Zend_Registry::isRegistered('HF_DEV')) {
    	return $url . $joinchar . 'rand=' .time() . '&ksid=' . session_id() . '&hf_dev=1';
    }
    else {
		return '?guid=ON&url=' . urlencode($url . $joinchar . 'rand=' .time() . '&ksid=' . session_id());
    }
}

/* vim: set expandtab: */

?>
