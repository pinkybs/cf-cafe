<?php
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div class="label">
                        <div style="background:#69ac16;text-align:center;font-size:xx-small;color:#FFF">
                                <table><tr><td></td></tr></table>
                                ○○さんのお店
                                <table><tr><td></td></tr></table>
                        <img src="img/label_line.gif" width="100%" height="10px" />
                        </div>
                </div>
                <div id="inlineflash">
                        <div style="text-align:center">
                        <object data="swf/opencafe.swf" type="application/x-shockwave-flash" width="240" height="240">
                        <param name="bgcolor" value="000000" />
                        <param name="loop" value="off" />
                        <param name="quality" value="high" />
                        </object>
                        </div>
                </div><!--/#inlineflash -->
                <div style="clear:both;" clear="all">
                <table><tr><td></td></tr></table>
                </div>
                        <div style="text-align:left;font-size:x-small">
                                <img src="img/npc.gif" style="float:left;margin:5px" align="left" />
                                いらっしゃい<br />
                                じゃあ、私の今日のメニューを選んでね
                        </div>
                <div id="restaurant">
                        <div style="text-align:center;clear:both" clear="all">
                                <a href="npc_friend_food.php"><img src="img/botton_1.gif" style="border:0px;margin-left:1px;margin-right:1px;" />食事をする</a>
                        </div>
                </div><!--/#restaurant-->
                <table><tr><td></td></tr></table>
        </div><!--/#body-->
</div><!--/#continar-->
<? require_once 'footer.php'; ?>