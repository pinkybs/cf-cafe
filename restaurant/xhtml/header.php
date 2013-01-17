<?


$_AGENT_NAME_ = '' ;
$_AGENT_CODE_ = '' ;

if( !isset( $_SERVER['HTTP_USER_AGENT'] ) ) $_SERVER['HTTP_USER_AGENT'] = '' ;

if( eregi( 'DoCoMo' , $_SERVER['HTTP_USER_AGENT'] ) )
{
	$_AGENT_NAME_ = 'i-mode' ;
	$_AGENT_CODE_ = 1 ;
}
elseif( eregi( 'J-PHONE' , $_SERVER['HTTP_USER_AGENT'] ) )
{
	$_AGENT_NAME_ = 'Vodafone' ;
	$_AGENT_CODE_ = 2 ;
}
elseif( eregi( 'Vodafone' , $_SERVER['HTTP_USER_AGENT'] ) )
{
	$_AGENT_NAME_ = 'Vodafone' ;
	$_AGENT_CODE_ = 2 ;
}
elseif( eregi( 'Softbank' , $_SERVER['HTTP_USER_AGENT'] ) )
{
	$_AGENT_NAME_ = 'Vodafone' ;
	$_AGENT_CODE_ = 2 ;
}
elseif( eregi( 'J-EMULATOR' , $_SERVER['HTTP_USER_AGENT'] ) )
{
	$_AGENT_NAME_ = 'Vodafone' ;
	$_AGENT_CODE_ = 2 ;
}
elseif( eregi( 'UP.Browser' , $_SERVER['HTTP_USER_AGENT'] ) )
{
	$_AGENT_NAME_ = 'ez-web' ;
	$_AGENT_CODE_ = 3 ;

	@output_add_rewrite_var('time',time());
}
elseif( eregi( 'DDIPOCKET' , $_SERVER['HTTP_USER_AGENT'] ) )
{
	$_AGENT_NAME_ = 'ddipocket' ;
	$_AGENT_CODE_ = 4 ;
}
else
{
	$_AGENT_NAME_ = substr($_SERVER['HTTP_USER_AGENT'],0,5);
	if ($_AGENT_NAME_ == "MOT-V") { # J-PHONE
		$_AGENT_NAME_ = 'Vodafone' ;
		$_AGENT_CODE_ = 2 ;
	}
	else {
		$_AGENT_NAME_ = 'pc' ;
		$_AGENT_CODE_ = 0 ;
	}
}


define( 'AGENT_NAME' , $_AGENT_NAME_ ) ;
define( 'AGENT_CODE' , $_AGENT_CODE_ ) ;

if( ereg( ' MSIE',getenv('HTTP_USER_AGENT') ) || $_AGENT_CODE_ == 3  ){
	header('Content-type: text/html; charset=UTF-8');
} else {
	header('Content-type: application/xhtml+xml; charset=UTF-8');
}

echo '<?xml version="1.0" encoding="UTF-8"?>';

$appname = "みんなのカフェ";

//$data = file("cooklist.txt");

?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
	<title><?= $appname ?> - mixiｱﾌﾟﾘ</title>
	<style type="text/css">
		<![CDATA[
			a:link{color:#00b3e0;}
			a:visited{color:#bd5000;}
			a:focus{}
			*{
				font-size:xx-small;
				color:#392007;
			}
		]]>
	</style>
</head>
<body style="color:#666;font-size:x-small;background:#ffe">