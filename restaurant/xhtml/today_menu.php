<?
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div style="background:#69ac16;text-align:center;font-size:xx-small;color:#FFF">
                        料理リスト
                        <img src="img/label_line.gif" width="100%" height="10px" />
                </div>
                <table><tr><td></td></tr></table>
                <div style="text-align:left;font-size:xx-small">
                        <img src="img/npc.gif" style="float:left;margin:5px" align="left" />
                        ふむふむ。覚えているのはﾌﾟﾚｰﾝｵﾑﾚﾂだね<br />
                        これをﾒﾆｭｰに登録しようか
                </div>
                <div style="text-align:center;font-size:xx-small;clear:both;" clear="all">
                        ｻﾗﾀﾞ/前菜/ｽｰﾌﾟ/ﾒｲﾝ他/ﾒｲﾝ魚<br />
                        ﾒｲﾝ肉/ﾋﾟｻﾞ/ﾘｿﾞｯﾄ/ﾊﾟｽﾀ
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
                                <span style="color:#F00">1</span>/10
                        </div>
                        <table><tr><td></td></tr></table>
                        <div class="cook_sum" style="width:240;margin:auto;text-align:center;background:#">
                                <div style="text-align:center;">
                                <?
                                        for($i = 1; $i < 11; $i++){
                                        $ii = sprintf("%02d",$i);
                                        
                                ?>
                                        <a href="today_menu_confirm.php"><img src="img/food/a<?= $ii; ?>.gif" width="70" style="border:1px;border-color:#CCC;border-style:solid;margin:1px;margin-bottom:5px" /></a>
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