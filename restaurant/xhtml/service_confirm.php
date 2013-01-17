<?
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div id="menu_list">
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/h.gif" width="5px" height="17px" style="float:left;margin-right:2px" align="left" />
                                リクエストに答える
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/character/6.gif" style="float:right;margin-right:2px" align="right" />
                                今日は暑いね。バテてしまいそうだ
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <table><tr><td></td></tr></table>
                        <img src="img/green_line.gif" width="100%" height="2px" style="margin-top:3px;margin-bottom:3px" />
                        <div style="text-align:left;font-size:xx-small">
                                どんな料理を出そうかな？<br />
                                <form action="service_complete.swf.php" method="post">
                                <div style="text-align:center">
                                <input type="text" /><br />
                                <input type="submit" valeu="送信" />
                                </div>
                                </form>
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:center;font-size:xx-small">
                                <a href="service.php">次の人を接客する</a><br />
                                <a href="request.php">ﾘｸｴｽﾄを見る</a>
                        </div>


                </div><!--/#menu_list-->
        </div>
</div>
<?
require_once 'footer.php';
?>