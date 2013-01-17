<?php
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div id="invite_detail">
                        <div style="text-align:center;">
                                <img src="" />
                        </div>
                        <div style="text-align:center;font-size:xx-small">
                                みんなのカフェに登録していない<br />
                                友達を誘おう！
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:center;font-size:xx-small;background:#69ac16;color:#FFF">
                                7/1(木)昼12:00-<br />
                                7/15(木)朝11:59
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:left;font-size:xx-small">
                                <a href="invite.php">友達に紹介メールを送る</a>
                        </div>
                        <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px" />
                        <div style="text-align:center;font-size:xx-small">
                                今回のあなたの紹介人数:<? $n; ?>人
                        </div>
                        <table><tr><td></td></tr></table>
                        <div class="invite_present">
                                <div style="text-align:center;font-size:xx-small;background:#69ac16;color:#FFF">
                                        みんなのカフェｱｲﾃﾑ
                                </div>
                                <table><tr><td></td></tr></table>
                                <div style="text-align:left;font-size:xx-small">
                                        みんなのカフェに登録してない友達があなたの紹介で1人登録するごとに200ｺｲﾝ＆限定ｱｲﾃﾑﾌﾟﾚｾﾞﾝﾄ
                                </div>
                                <div class="present_detail">
                                        <div style="text-align:center;font-size:xx-small;background:#69ac16;color:#FFF">
                                                1人紹介
                                        </div>
                                        <div style="text-align:center;">
                                                <img src="" /><img src="" />
                                        </div>
                                        <div style="text-align:center;font-size:xx-small">
                                                200ｺｲﾝ＆ﾃﾞｺﾚｰｼｮﾝｱｲﾃﾑ
                                        </div>
                                        <div style="text-align:left;font-size:xx-small">
                                                友達とのお揃いﾃﾞｺﾚｰｼｮﾝｱｲﾃﾑ。紹介でしか手に入らないﾚｱｱｲﾃﾑ。<br />
                                                <span style="text-align:center;color:#F00">
                                                        雰囲気値:50
                                                </span>
                                        </div>
                                </div><!--/.present_detail-->
                                <div class="present_detail">
                                        <div style="text-align:center;font-size:xx-small;background:#69ac16;color:#FFF">
                                                2人紹介
                                        </div>
                                        <div style="text-align:center;">
                                                <img src="" /><img src="" />
                                        </div>
                                        <div style="text-align:center;font-size:xx-small">
                                                400ｺｲﾝ＆ﾃﾞｺﾚｰｼｮﾝｱｲﾃﾑ
                                        </div>
                                        <div style="text-align:left;font-size:xx-small">
                                                ｶﾌｪが素敵になるﾃﾞｺﾚｰｼｮﾝｱｲﾃﾑ。紹介でしか手に入らないﾚｱｱｲﾃﾑ。<br />
                                                <span style="text-align:center;color:#F00">
                                                        雰囲気値:70
                                                </span>
                                        </div>
                                </div><!--/.present_detail-->
                                <div class="present_detail">
                                        <div style="text-align:center;font-size:xx-small;background:#69ac16;color:#FFF">
                                                3人紹介
                                        </div>
                                        <div style="text-align:center;">
                                                <img src="" /><img src="" />
                                        </div>
                                        <div style="text-align:center;font-size:xx-small">
                                                600ｺｲﾝ＆ﾃﾞｺﾚｰｼｮﾝｱｲﾃﾑ
                                        </div>
                                        <div style="text-align:left;font-size:xx-small">
                                                究極のﾃﾞｺﾚｰｼｮﾝｱｲﾃﾑ。紹介でしか手に入らないﾚｱｱｲﾃﾑ。<br />
                                                <span style="text-align:center;color:#F00">
                                                        雰囲気値:100
                                                </span>
                                        </div>
                                </div><!--/.present_detail-->
                        </div><!--/.invite_present-->
                        <div style="text-align:center;font-size:xx-small">
                                ※ｱｲﾃﾑは権利があれば同じものでも選べます。<br />
                                ※どのアイテムでも取得に必要な権利は１となります。
                        </div>
                        <div style="text-align:left;font-size:xx-small">
                                <a href="invite.php">友達に紹介メールを送る</a>
                        </div>
                </div><!--/#invite_detail-->
        </div>
</div>


<? require_once 'footer.php'; ?>