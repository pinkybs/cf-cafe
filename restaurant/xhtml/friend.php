<?php
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div class="label">
                        <div style="background:#69ac16;text-align:center;font-size:xx-small;color:#FFF">
                                <table><tr><td></td></tr></table>
                                町のｶﾌｪ<br />
                                さかりん
                                <table><tr><td></td></tr></table>
                        <img src="img/label_line.gif" width="100%" height="10px" />
                        </div>
                </div>
                <div id="inlineflash">
                        <div style="text-align:center">
                        <object data="swf/default.swf" type="application/x-shockwave-flash" width="240" height="240">
                        <param name="bgcolor" value="000000" />
                        <param name="loop" value="off" />
                        <param name="quality" value="high" />
                        </object>
                        </div>
                </div><!--/#inlineflash -->
                <div id="owner_comment">
                        <div style="display:-wap-marquee;font-size:xx-small">
                                へい！らっしゃい！（店主が決めた言葉が入ります。）
                        </div>
                </div><!--/#owner_comment-->
                <div style="text-align:center;font-size:xx-small">
                        いらっしゃい！よく来てくれたね。今日の料理はちょっと自信作だよ<br />
                        <a href="service_menu.php">サービスメニューを食べる</a>
                </div>
                <div id="restaurant">
                        <table align="center" width="240px">
                                <tr>
                                        <td width="60px"><img src="img/food_sum/b02.gif" /><div style="text-align:center;font-size:xx-small"></div></td>
                                        <td width="60px"><img src="img/food_sum/a10.gif" /><div style="text-align:center;font-size:xx-small;"></div></td>
                                        <td width="60px"><div style="text-align:center;font-size:xx-small;color:#999">未配膳</div></td>
                                        <td width="60px"><div style="text-align:center;font-size:xx-small;color:#999"></div></td>
                                </tr>
                        </table>
                        <div style="text-align:center;font-size:xx-small">
                        ストック:100% <img src="img/g.gif" /><br />
                        </div>
                        <div style="text-align:center;">
                                <a href="friend_food.php"><img src="img/botton_1.gif" style="border:0px;margin-left:1px;margin-right:1px;" />食事をする</a>
                                <a href="friend_request.php"><img src="img/botton_2.gif" style="border:0px;" />ﾘｸｴｽﾄ</a>
                                <a href="friend_shopping.php"><img src="img/botton_5.gif" style="border:0px;" />買出し</a>
                        </div>
                </div><!--/#restaurant-->
                <table><tr><td></td></tr></table>
                <div style="text-align:center;font-size:xx-small">
                        <a href="friend.php">←*隣のｶﾌｪ</a> | <a href="friend.php">隣のｶﾌｪ#→</a>
                </div>
                <table><tr><td></td></tr></table>
                <div class="profile">
                        <div style="text-align:center">
                        <img src="img/g_line.gif" width="240" />
                        </div>
                        <div style="font-size:xx-small">
                        ｶﾌｪｵｰﾅｰ :○○さん<br />
                        ｵｰﾅｰﾗﾝｸ :見習いｵｰﾅｰ<br />
                        常連客:<a href="patron_list.php">10人</a><br />
                        ﾚｼﾋﾟ数:10<br />
                        行きつけ:5店舗<br />
                        <table><tr><td></td></tr></table>
                        </div>
                        <div style="text-align:center">
                        <img src="img/g_line.gif" width="240" />
                        </div>
                </div>
                        <table><tr><td></td></tr></table>
                <div id="comment">
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/h.gif" width="5px" height="17px" style="float:left;margin-right:2px" align="left" />
                                来店コメント
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <table><tr><td></td></tr></table>
                        <div class="form" style="text-align:center;font-size:xx-small">
                                <form action="" method="">
                                        <input type="text" value="" size="15" />
                                        <input type="submit" />
                                </form>
                        </div><!--/.comment-->
                        <table><tr><td></td></tr></table>
                        <div class="comment_list">
                                <div style="text-align:left;font-size:xx-small">
                                        おー！オープンカフェっぽい！<br />
                                        ゆうくん　<a href="">削除</a>(14:04)
                                </div>
                                <img src="img/green_line.gif" width="100%" height="2px" style="margin-top:3px;margin-bottom:3px" />
                                <div style="text-align:left;font-size:xx-small">
                                        コーンポタージュって覚えてる？<br />
                                        さかりん　<a href="">削除</a>(7月8日)
                                </div>
                                <img src="img/green_line.gif" width="100%" height="2px" style="margin-top:3px;margin-bottom:3px" />
                                <div style="text-align:left;font-size:xx-small">
                                        リクエストしたよ～<br />
                                        章昕　<a href="">削除</a>(7月8日)
                                </div>
                                <img src="img/green_line.gif" width="100%" height="2px" style="margin-top:3px;margin-bottom:3px" />
                                <div style="text-align:left;font-size:xx-small">
                                        買出しありがとー！<br />
                                        あちゃ　<a href="">削除</a>(7月6日)
                                </div>
                                <img src="img/green_line.gif" width="100%" height="2px" style="margin-top:3px;margin-bottom:3px" />
                        </div><!--/.comment_list-->
                        <div style="text-align:right;font-size:xx-small">
                                <a href="comment_list.php">⇒もっと見る</a>
                        </div>
                <table><tr><td></td></tr></table>
                </div><!--/#friendguest-->
                <div id="friendguest">
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/h.gif" width="5px" height="17px" style="float:left;margin-right:2px" align="left" />
                                お店の状況
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <table><tr><td></td></tr></table>
                        <div class="feedlist">
                                <div style="text-align:left;font-size:xx-small">
                                        7/4 04:36 <a href="friend.php">さかりん</a><br />
                                        ペペロンチーノを食べに来ました（100G）
                                </div>
                                <div style="text-align:center;">
                                        <img src="img/dotted.gif" width="240px" height="1px" style="margin-top:3px;margin-bottom:3px;" />
                                </div>
                                <div style="text-align:left;font-size:xx-small">
                                        7/4 04:36 <a href="friend.php">さかりん</a><br />
                                        <a href="request.php">ぺペロンチーノをﾘｸｴｽﾄ</a>
                                </div>
                                <div style="text-align:center;">
                                        <img src="img/dotted.gif" width="240px" height="1px" style="margin-top:3px;margin-bottom:3px;" />
                                </div>
                                <div style="text-align:left;font-size:xx-small">
                                        7/3 14:36 <a href="friend.php">さかりん</a><br />
                                        アラビアータを食べに来ました（100G）
                                </div>
                                <div style="text-align:center;">
                                        <img src="img/dotted.gif" width="240px" height="1px" style="margin-top:3px;margin-bottom:3px;" />
                                </div>
                                <div style="text-align:left;font-size:xx-small">
                                        7/3 13:36 <a href="friend.php">さかりん</a><br />
                                        代わりに材料を買出しに行ってくれました。
                                </div>
                                <div style="text-align:center;">
                                        <img src="img/dotted.gif" width="240px" height="1px" style="margin-top:3px;margin-bottom:3px;" />
                                </div>
                        </div><!--/.feedlist-->
                        <div style="text-align:right;font-size:xx-small">
                                <a href="guestlist.php">⇒もっと見る</a>
                        </div>
                        <table><tr><td></td></tr></table>
                </div><!--/#friendguest-->
        </div><!--/#body-->
</div><!--/#continar-->
<? require_once 'footer.php'; ?>