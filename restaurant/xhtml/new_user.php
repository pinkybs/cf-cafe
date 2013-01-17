<?php
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div class="label" style="text-align:center;">
                        <img src="img/logo.gif" />
                </div>
                <div class="restaurant">
                        <div style="text-align:center;font-size:x-small">
                                <a href="character_select.php">ｶﾌｪOPEN!</a>
                        </div>
                </div><!--/.restaurant-->
                <table><tr><td></td></tr></table>

                <div id="res_detail">
                        <div style="text-align:center;font-size:medium">
                                <?= $appname ?>とは？
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:left;font-size:xx-small">
                                目指すは自分だけのｶﾌｪｶﾌｪ本格的なﾚｼﾋﾟで一流ｼｪﾌも夢じゃない友達誘ってﾚｼﾋﾟｹﾞｯﾄ
                        </div>
                </div><!--/#res_detail-->
                <table><tr><td></td></tr></table>
                <div id="new_user">
                        <div style="text-align:center;font-size:xx-small;background:#008886;color:#FFF">
                                ｹﾞｰﾑ紹介
                        </div>
                        <div class="new_detail" style="clear:both;font-size:xx-small;" clear="all">
                                <img src="img/new.gif" style="float:left;margin:5px" align="left" />
                                今日のｼｪﾌお勧め料理は何かな<br />
                                あなたのお勧め料理を登録しよう
                                <div style="clear:both;" clear="all">
                                        <img src="img/green_line.gif" width="100%" height="2px" style="margin-top:3px;" />
                                </div>
                        </div><!--/.new_detail-->
                        <div class="new_detail" style="background:#ffffdd;font-size:xx-small;">
                                <img src="img/new.gif" style="float:left;margin:5px" align="left" />
                                覚えた料理はもちろんﾚｼﾋﾟ付き<br />
                                本格料理のﾚｼﾋﾟを覚えちゃおう
                                <div style="clear:both;" clear="all">
                                        <img src="img/green_line.gif" width="100%" height="2px" style="margin-top:3px;" />
                                </div>
                        </div><!--/.new_detail-->
                        <div class="new_detail" style="font-size:xx-small;">
                                <img src="img/new.gif" style="float:left;margin:5px" align="left" />
                                友達のｶﾌｪで舌の修行<br />
                                いっぱい食べて味を盗んじゃえ
                                <div style="clear:both;" clear="all">
                                        <img src="img/green_line.gif" width="100%" height="2px" style="margin-top:3px;" />
                                </div>
                        </div><!--/.new_detail-->
                        <div class="new_detail" style="background:#ffffdd;font-size:xx-small;">
                                <img src="img/new.gif" style="float:left;margin:5px" align="left" />
                                料理の味は素材から<br />
                                今日の材料はﾐﾆｹﾞｰﾑでGETだよ
                                <div style="clear:both;" clear="all">
                                        <img src="img/green_line.gif" width="100%" height="2px" style="margin-top:3px;" />
                                </div>
                        </div><!--/.new_detail-->
                </div><!--/#new_user-->
                <div class="">
                        <div style="text-align:center;font-size:medium">
                                <a href="character_select.php">ｶﾌｪOPEN!</a>
                        </div>
                </div><!--/.restaurant-->
                <table><tr><td></td></tr></table>
        </div><!--/#body-->
</div><!--/#container-->
<? require_once 'footer.php'; ?>