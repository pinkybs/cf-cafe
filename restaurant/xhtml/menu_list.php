<?
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div style="background:#60dfff;text-align:center;font-size:xx-small;color:#FFF">
                        <img src="img/h_menu.gif" width="240" height="30" />
                </div>
                <table><tr><td></td></tr></table>
                <div style="text-align:center;font-size:xx-small">
                        <a href="">ｻﾗﾀﾞ</a>/<a href="">前菜</a>/<a href="">ｽｰﾌﾟ</a>/<a href="">ﾒｲﾝ他</a>/<a href="">ﾒｲﾝ魚</a><br />
                        <a href="">ﾒｲﾝ肉</a>/<a href="">ﾋﾟｻﾞ</a>/<a href="">ﾘｿﾞｯﾄ</a>/<a href="">ﾊﾟｽﾀ</a>
                </div>
                <table><tr><td></td></tr></table>
                <div id="menu_list">
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/h.gif" width="5px" height="17px" style="float:left;margin-right:2px" align="left" />
                                サラダ
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:center;font-size:xx-small">
                                <span style="color:#F00">3</span>/10
                        </div>
                        <table><tr><td></td></tr></table>
                        <div class="cook_sum" style="width:240;margin:auto;text-align:center;background:#">
                                <div style="text-align:center;">
                                <?
                                        for($i = 1; $i < 11; $i++){
                                        $ii = sprintf("%02d",$i);
                                        
                                ?>
                                        <a href="menu_confirm.php?food_num=<?= $i ?>"><img src="img/food/a<?= $ii; ?>.gif" width="70" style="border:1px;border-color:#CCC;border-style:solid;margin:1px;margin-bottom:5px" /></a>
                                <?
                                                if($i == 3){
                                                        echo "</div><div style=\"text-align:center;\">";
                                                } else if($i == 6){
                                                        echo "</div><div style=\"text-align:center;\">";
                                                } else if($i == 9){
                                                        echo "</div><div style=\"text-align:center;\">";
                                                }
                                        }
                                ?>
                                </div>

                        </div>
                        <table><tr><td></td></tr></table>
                </div><!--/#menu_list-->
        </div>
</div>
<?
require_once 'footer.php';
?>