<?php
require_once 'header.php';
?>
<div id="container">
        <div id="body" style="font-size:x-small;">

		<div id="mixiHeader" style="background:#ff9933;text-align:center;">
			<span style="color:#fff;">みんなのカフェ</span><br />
      	</div><!--/#mixiHeader-->
		
		<div id="invite">
			<div class="headline" style="background:#C96;text-align:center;">

				招待する<br />
			</div><!--/.headline-->
			<div class="inner">
				<table><tr><td></td></tr></table>
				招待するﾏｲﾐｸを選んでください。<br />
				一度に15人まで選択できます。<br />
				<table><tr><td></td></tr></table>

				<div class="line" style="background:#ff9933;"><img src="img/spacer.gif" width="1" height="2" /></div>
				<table><tr><td></td></tr></table>
				<a href="#">ｸﾞﾙｰﾌﾟで見る</a><br />
				<img src="img/spacer.gif" width="1" height="10" /><br />
				<div style="text-align:center;">
					ﾆｯｸﾈｰﾑ順 | <a href="#">ID順</a>
				</div>

				<img src="img/spacer.gif" width="1" height="10" /><br />
				<div class="line" style="background:#FC6;"><img src="img/spacer.gif" width="1" height="2" /></div>
				誘う人数:0人<br />
				<img src="img/spacer.gif" width="1" height="10" /><br />
				1件～10件を表示<br />
				<table><tr><td></td></tr></table>
								
				<div class="mymixyList">	
					<form method="post" action="#">

						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />
                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />
                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />
                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />

                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />
                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />
                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />
                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />
                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />
                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />
                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<input name="1" type="checkbox" value="yes"  />りょうすけ<br />
                                                <img src="img/green_line.gif" width="100%" height="1px" style="margin:3px;" />
						<table><tr><td></td></tr></table>
							<div style="text-align:center;">
								<input type="submit" value="次を表示" style="color:#000;font-size:x-small;" />
							</div>
						<table><tr><td></td></tr></table>
					</form>
					<div class="line" style="background:#ff9933;"><img src="img/spacer.gif" width="1" height="2" /></div>
					<table><tr><td></td></tr></table>

					ﾏｲﾐｸを選んだら、下記のﾎﾞﾀﾝを押してください。<br />
					<table><tr><td></td></tr></table>
					<div style="text-align:center;">
						<a href="invite_complete.php">招待する(招待)</a><br />
						<form method="post" action="#">
							<input type="submit" value="招待する(招待)" style="color:#000;font-size:x-small;" />
						</form>
					</div>

					<table><tr><td></td></tr></table>
					<div class="line" style="background:#ff9933;"><img src="img/spacer.gif" width="1" height="2" /></div>
					<table><tr><td></td></tr></table>
					ｸﾞﾙｰﾌﾟで選ぶ<br />
					├全て(00)<br />
					└<a href="#">ｸﾞﾙｰﾌﾟ未設定(00)</a><br />
					※選択はｸﾘｱされます。<br />

					<table><tr><td></td></tr></table>
					<div class="line" style="background:#ff9933;"><img src="img/spacer.gif" width="1" height="2" /></div>
					<table><tr><td></td></tr></table>
					<a href="index.xhtml">ｱﾌﾟﾘへ戻る</a><br />
                                </div>
			</div><!--/.inner-->	
                </div><!--/#invite_detail-->
        </div>
</div>


<? require_once 'footer.php'; ?>