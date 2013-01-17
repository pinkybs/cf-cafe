<?php
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div class="label">
                        <div style="background:#69ac16;text-align:center;font-size:xx-small;color:#FFF">
                                <table><tr><td></td></tr></table>
                                自分のキャラを決めよう！
                                <table><tr><td></td></tr></table>
                        <img src="img/label_line.gif" width="100%" height="10px" />
                        </div>
                </div>
                <form action="feed02.php" method="post">
                <div class="restaurant">
                        <div style="text-align:left;font-size:x-small">
                                <img src="img/npc.gif" style="float:left;margin:5px" align="left" />
                                自分のキャラクターを決めよう！<br />
                                変更は出来ないから気をつけてね
                        </div>
                        <div style="text-align:center;font-size:xx-small;background:#69ac16;clear:both;color:#FFF" clear="all">
                                キャラクター
                        </div>
                        <div style="text-align:center;font-size:xx-small">
                                <? if(!$_GET['chara']){ $chara = "f"; } else { $chara = $_GET['chara']; } ?>
                                [<? if($chara == "m"){ echo "男の子"; } else { ?><a href="character_select.php?chara=m">男の子</a><? } ?>|<? if($chara == "f"){ echo "女の子"; } else { ?><a href="character_select.php?chara=f">女の子</a><? } ?>]
                        </div>
                        <div style="text-align:center;">
                                <table align="center">
                                        <tr>
                                                <? if($chara == "m") {
                                                        for($i=1; $i<6; $i++){
                                                ?>
                                                <td><div style="text-align:center;font-size:xx-small"><img src="img/character/<?= $i ?>.gif" width="45" /><br /><input type="radio" name="character" value="<?= $i ?>" /></div></td>
                                                <?      }
                                                   } else {
                                                        for($i=6; $i<11; $i++){
                                                ?>
                                                <td><div style="text-align:center;font-size:xx-small"><img src="img/character/<?= $i ?>.gif" width="45" /><br /><input type="radio" name="character" value="<?= $i ?>" /></div></td>
                                                <?
                                                        }
                                                   }
                                                ?>
                                        </tr>
                                </table>
                        </div>
                        <div style="text-align:center;font-size:xx-small;background:#69ac16;clear:both;color:#FFF" clear="all">
                                カフェの名前
                        </div>
                        <div style="text-align:left;font-size:xx-small">
                                ※全角2文字以上～13文字<br />
                                <a href="feed02.php">次へ</a>
                                <div style="text-align:center;font-size:xx-small">
                                        <input type="text" value="○○のれすとらーん" /><br />
                                        <input type="submit" value="次へ" />
                                </div>
                        </div>
                </div><!--/.restaurant-->
                </form>
                <table><tr><td></td></tr></table>
                <table><tr><td></td></tr></table>
        </div><!--/#body-->
</div><!--/#continar-->
<? require_once 'footer.php'; ?>