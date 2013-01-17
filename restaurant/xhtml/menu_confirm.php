<?
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div id="menu_list">
                        <div style="font-size:x-small;background:#f6f6f6;">
                                <img src="img/h.gif" width="5px" height="17px" style="float:left;margin-right:2px" align="left" />
                                サラダ
                                <div style="clear:both;" clear="all">
                                <img src="img/line.gif" width="100%" height="1px" />
                                </div>
                        </div>
                        <div style="text-align:center;">
                                <?
                                $food_num = $_GET['food_num'];
                                $food_num = sprintf("%02d",$food_num);
                                ?>
                                <img src="img/food/a<?= $food_num ?>.gif" />
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:center;font-size:xx-small">
                                <a href="menu_complete.php" accesskey="5">本日のﾒﾆｭｰに入れる</a>
                        </div>
                        <div style="text-align:left;font-size:xx-small">
                                今まで作った回数:100回<br />
                                1人前の経験値:1.9<br />
                                1人前の単価:121<br />
                                材料費:2940
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:center;font-size:xx-small;background:#69ac16;color:#FFF">
                                フォアグラのソテーとフィレ肉ステーキ<br />
                                (Foie gras and fillet steak)
                        </div>
                        <div style="text-align:left;font-size:xx-small">
                                牛ヒレ肉にフォアグラのパテを塗り、マッシュルームのソテーを乗せてパイ生地で包んで焼くというシンプルなものなのですが、素晴らしい味わいです
                        </div>
                        <div style="text-align:center;font-size:xx-small;background:#f6f6f6">
                                材料
                        </div>
                        <div style="text-align:left;font-size:xx-small">
                                牛フィレ肉 120g<br />
                                フォアグラ 15g<br />
                                塩 小さじ1杯<br />
                        </div>
                        <table><tr><td></td></tr></table>
                </div><!--/#menu_list-->
        </div>
</div>
<?
require_once 'footer.php';
?>