<?php

/**
 * Mobile restaurant flash logic
 *
 * @copyright  Copyright (c) 2009 Community Factory Inc. (http://communityfactory.com)
 * @create  hch  2010-7-13
 */

class Mbll_Restaurant_Flash
{
    public static function tryDecoration($uid, $did)
    {
        $url = Zend_Registry::get('host') . '/decoration/set/did/' . $did;
        
        $param = array('v_mixiUrl' => FLASH_URL . urlencode($url));
        return self::_swfWrapper(FLASH_ROOT . '/decoration.swf', $param);
    }
    
    public static function decoration()
    {
        
    }
    
    private static function _swfWrapper($file,$item)
	{
		$tags	= self::_buildTags($item);
		$src	= file_get_contents($file);
		$i	= (ord($src[8])>>1)+5;
		$length	= ceil((((8-($i&7))&7)+$i)/8)+17;
		$head	= substr($src,0,$length);
		return(
			substr($head,0,4).
			pack("V",strlen($src)+strlen($tags)).
			substr($head,8).
			$tags.
			substr($src,$length)
		);
	}
	
	private static function _buildTags($item)
	{
		$tags = array();
		foreach($item as $k => $v){
			array_push( $tags, sprintf(
				"\x96%s\x00%s\x00\x96%s\x00%s\x00\x1d",
				pack("v",strlen($k)+2),	$k,
				pack("v",strlen($v)+2),	$v
			));
		}
		$s = implode('',$tags);
		return(sprintf(
			"\x3f\x03%s%s\x00",
			pack("V",strlen($s)+1),
			$s
		));
	}
}