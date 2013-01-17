<?php
require_once 'header.php';
?>
<div id="container">
        <div id="header" style="text-align:center">
                <div class="label">
                        <div style="background:#69ac16;text-align:center;font-size:xx-small;color:#FFF">
                                <table><tr><td></td></tr></table>
                                超人気の穴場店
                                <table><tr><td></td></tr></table>
                        <img src="img/label_line.gif" width="100%" height="10px" />
                        </div>
                </div>
        </div>
        <div id="body">
                <div class="profile">
                        <table><tr><td></td></tr></table>
                        <img src="img/0_6.gif" style="float:left;margin-right:5px" align="left" />
                        <div style="font-size:xx-small">
                        レベル:3<br />
                        経験値:100/500<br />
                        ﾚｼﾋﾟ数:10<br />
                        常連客:<a href="patron_list.php">10人</a><br />
                        行きつけ:5店舗<br />
                        所持金:9999<br />
                        <table><tr><td></td></tr></table>
                        </div>
                        <div style="clear:both" clear="all">
                                <table><tr><td></td></tr></table>
                        </div>
                        <div style="font-size:xx-small">
                                来店したお客様に一言！<br />
                                <form action="profile.php">
                                └<input type="text" value="へいらっしゃい！" /><input type="submit" value="編集" />
                                </form>
                        </div>
                        <table><tr><td></td></tr></table>
                </div>
                <div id="friendguest">
                        <div style="font-size:x-small;background:#eee;">
                                <img src="img/h.gif" width="5px" height="17px" style="float:left;margin-right:2px" align="left" />
                                来店履歴
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <table><tr><td></td></tr></table>
                        <div class="feedlist">
                                <div style="text-align:left;font-size:xx-small">
                                        <a href="friend.php">さかりん</a>（オーダー:5品）
                                </div>
                                <div style="text-align:center;">
                                        <img src="img/dotted.gif" width="240px" height="1px" style="margin-top:3px;margin-bottom:3px;" />
                                </div>
                                <div style="text-align:left;font-size:xx-small">
                                        <a href="friend.php">さかりん</a>（オーダー:5品）
                                </div>
                                <div style="text-align:center;">
                                        <img src="img/dotted.gif" width="240px" height="1px" style="margin-top:3px;margin-bottom:3px;" />
                                </div>
                                <div style="text-align:left;font-size:xx-small">
                                        <a href="friend.php">さかりん</a>（オーダー:5品）
                                </div>
                                <div style="text-align:center;">
                                        <img src="img/dotted.gif" width="240px" height="1px" style="margin-top:3px;margin-bottom:3px;" />
                                </div>
                                <div style="text-align:left;font-size:xx-small">
                                        <a href="friend.php">さかりん</a>（オーダー:5品）
                                </div>
                                <div style="text-align:center;">
                                        <img src="img/dotted.gif" width="240px" height="1px" style="margin-top:3px;margin-bottom:3px;" />
                                </div>
                        </div><!--/.feedlist-->
                        <div style="text-align:right;font-size:xx-small">
                                <a href="guest_list.php">⇒もっと見る</a>
                        </div>
                        <table><tr><td></td></tr></table>
                </div><!--/#friendguest-->
        </div><!--/#body-->
</div>
<? require_once 'footer.php'; ?>