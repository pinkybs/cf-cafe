<?php
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div id="inlineflash">
                        <div style="text-align:center">
                        <object data="swf/default.swf" type="application/x-shockwave-flash" width="240" height="240">
                        <param name="bgcolor" value="000000" />
                        <param name="loop" value="off" />
                        <param name="quality" value="high" />
                        </object>
                        </div>
                </div><!--/#inlineflash -->
                <div style="text-align:center;font-size:xx-small;background:#008886;color:#FFF">
                        OPENしたてのｶﾌｪ
                </div>
                <div id="restaurant">
                        <div style="text-align:left;font-size:xx-small">
                                <img src="img/npc.gif" style="float:left;margin:5px" align="left" />
                                まずはお店に出す料理を決めよう<br />
                                料理はいろんな人が食べにきてくれるよ
                        </div>
                        <div style="text-align:center;font-size:x-small;clear:both" clear="all">
                                <a href="today_menu.php">今日のメニュー</a>
                        </div>
                </div><!--/#restaurant-->
                <table><tr><td></td></tr></table>
                <div class="profile">
                        <div style="text-align:center">
                        <img src="img/g_line.gif" width="240" />
                        </div>
                        <div style="font-size:xx-small">
                        ｶﾌｪｵｰﾅｰ :○○さん<br />
                        ｵｰﾅｰﾗﾝｸ :見習いｵｰﾅｰ<br />
                        ストック:100% <img src="img/g.gif" /><br />
                        料理研究:★★★★★<br />
                        CafeCoin:<span style="color:#F00">9999</span>CC<br />
                        <table><tr><td></td></tr></table>
                        </div>
                        <div style="text-align:center">
                        <img src="img/g_line.gif" width="240" />
                        </div>
                </div>
        </div><!--/#body-->
</div><!--/#continar-->
<? require_once 'footer.php'; ?>