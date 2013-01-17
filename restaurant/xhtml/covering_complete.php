<?
require_once 'header.php';
?>
<div id="container">
        <div id="body">
                <div style="background:#69ac16;text-align:center;font-size:xx-small;color:#FFF">
                        まかない料理の完成
                        <img src="img/label_line.gif" width="100%" height="10px" />
                </div>
                <div id="menu_list">
                        <div style="text-align:center;">
                                <img src="img/image.gif" />
                        </div>
                        <div style="text-align:center;font-size:xx-small">
                        It'sまかない料理
                        </div>
                        <table><tr><td></td></tr></table>
                        <div style="text-align:left;font-size:xx-small">
                        まかない料理の特徴を一言！
                        </div>
                        <div style="text-align:center;">
                        <form action="covering_finish.php">
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