<?
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div id="menu_list">
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/h.gif" width="5px" height="17px" style="float:left;margin-right:2px" align="left" />
                                リクエストに応えてもらいました
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <div style="text-align:center;">
                                <img src="img/image.gif" />
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:center;font-size:xx-small;background:#69ac16;color:#FFF">
                                フォアグラのソテーとフィレ肉ステーキ<br />
                                (Foie gras and fillet steak)
                        </div>
                        <div style="text-align:center;font-size:xx-small">
                                ○○さんからコメント：<br />
                                コメントが入ります。コメントが入ります。
                        </div>
                        <div style="text-align:left;font-size:xx-small">
                                お礼のコメントを返す
                                <div style="text-align:center;">
                                <form action="answer_complete.php">
                                        <input type="text" /><br />
                                        <input type="submit" />
                                </form>
                                </div>
                        </div>
                        <table><tr><td></td></tr></table>
                </div><!--/#menu_list-->
        </div>
</div>
<?
require_once 'footer.php';
?>