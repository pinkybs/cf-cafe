<?
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div style="background:#69ac16;text-align:center;font-size:xx-small;color:#FFF">
                        まかない料理を作る
                        <img src="img/label_line.gif" width="100%" height="10px" />
                </div>
                <div id="menu_list">
                        <div style="text-align:left;font-size:xx-small">
                        どんなまかない料理にしよう？名前を決めてね！
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:left;font-size:xx-small">
                        ■まかない料理の名前
                        </div>
                        <div style="text-align:center;">
                        <form action="covering.swf.php">
                                <input type="text" /><br />
                                <input type="submit" />
                        </form>
                        </div>
                        <table><tr><td></td></tr></table>
                </div><!--/#menu_list-->
        </div>
</div>
<?
require_once 'footer.php';
?>