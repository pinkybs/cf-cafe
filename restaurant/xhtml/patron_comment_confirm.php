<?php
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div id="comment">
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/h.gif" width="5px" height="17px" style="float:left;margin-right:2px" align="left" />
                                歓迎ﾒｯｾｰｼﾞ確認
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:left;font-size:xx-small">
                                歓迎ﾒｯｾｰｼﾞ:いらっしゃいませー！
                        </div>
                        <div style="text-align:center">
                                <form action="patron_comment_complete.php" method="post">
                                        <input type="submit" value="決定" />
                                </form>
                        </div>
                </div>
        </div><!--/#body-->
</div><!--/#continar-->
<? require_once 'footer.php'; ?>