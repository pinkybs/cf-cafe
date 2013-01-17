<?
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div style="background:#69ac16;text-align:center;font-size:xx-small;color:#FFF">
                        リクエストオーダー
                        <img src="img/label_line.gif" width="100%" height="10px" />
                </div>
                <div id="menu_list">
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/character/6.gif" style="float:right;margin-right:2px" align="right" />
                                いつも来てくれてありがと！<br />
                                何か食べたいものでもある？<br />
                                作ってあげるから何でもリクエストしてね
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <div style="text-align:left">
                                ■リクエストメニュー<br />
                                <div style="text-align:center">
                                <a href="friend_request_confirm.php">次へ</a>
                                <input type="text" /><br />
                                <input type="submit" value="確認" />
                                </div>
                        </div>
                        <table><tr><td></td></tr></table>
                </div><!--/#menu_list-->
        </div>
</div>
<?
require_once 'footer.php';
?>