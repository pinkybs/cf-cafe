<?
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                        <div style="background:#69ac16;text-align:center;font-size:xx-small;color:#FFF">
                                リクエストオーダー確認
                                <img src="img/label_line.gif" width="100%" height="10px" />
                        </div>
                <div id="menu_list">
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/character/6.gif" style="float:right;margin-right:2px" align="right" />
                                リクエストの内容はこちらでよろしいですか？
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <div style="text-align:center;font-size:xx-small">
                                <form action="feed.php?feed=4" method="post">
                                「上海のような暑い料理を」<br />
                                <input type="text" /><br />
                                <input type="submit" value="ﾘｸｴｽﾄする" />
                                </form>
                        </div>
                </div><!--/#menu_list-->
        </div>
</div>
<?
require_once 'footer.php';
?>