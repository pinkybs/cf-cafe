<?php
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div id="comment">
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/h.gif" width="5px" height="17px" style="float:left;margin-right:2px" align="left" />
                                歓迎ﾒｯｾｰｼﾞ
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <table><tr><td></td></tr></table>
                        <div class="form" style="text-align:center;font-size:xx-small">
                                <form action="patron_comment_confirm.php" method="">
                                        <input type="text" value="" size="15" />
                                        <input type="submit" />
                                </form>
                        </div><!--/.comment-->
                        <table><tr><td></td></tr></table>
                        <div style="text-align:center;font-size:xx-small">
                                <a href="patron_list.php">戻る</a>
                        </div>
                </div>
        </div><!--/#body-->
</div><!--/#continar-->
<? require_once 'footer.php'; ?>