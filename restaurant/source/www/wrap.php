<?php


header("Content-Type: application/x-shockwave-flash");
//echo swf_wrapper('test.swf',array('arg'=>"dsadasdasdasdadadsa"));
echo swf_wrapper('error.swf',$_GET);

function swf_wrapper($file,$item){
	$tags	= build_tags($item);
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

function build_tags($item){
	$tags = array();
	foreach($item as $k => $v){
		//$v = mb_convert_encoding($v,'SJIS','UTF-8');
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


?>