<?php
require_once 'header.php';
?>
<?
if(!$_GET['feed']){
$feed = 1;
} else {
$feed = $_GET['feed'] -1;
}
$comment = "";
$backurl = "";

$test = file('feed.txt');

$list = explode(",",$test[$feed]);

$comment = $list[0];
$backurl = $list[1];
?>


<div id="container">

		<div id="mixiHeader" style="background:#ff9933;text-align:center;">
			<span style="color:#fff;">restaurant</span><br />
      	</div><!--/#mixiHeader-->
		
		<div id="freegift">
			<div class="inner">

				<div class="menu" style="text-align:center;">
					<div class="title" style="background-color:#C96;text-align:center;color:#000000;">
						更新情報の公開<br />
					</div><!--/.title-->
				</div><!--/.menu-->
				
				<div class="freegiftinfo">
					<table><tr><td></td></tr></table>
					以下の情報を友人に公開してもよろしいですか?<br />

					<table><tr><td></td></tr></table>
					<div class="line" style="background:#ff9933;"><table><tr><td></td></tr></table></div>
					<table><tr><td></td></tr></table>
					
					<?= $comment ?><br />
					<table><tr><td></td></tr></table>
					<div class="line" style="background:#ff9933;"><table><tr><td></td></tr></table></div>
					<table><tr><td></td></tr></table>
					
					<div style="text-align:center;">

					<a href="get_complete.php">O   K</a>
					<form method="post" action="get_complete.php">
						<input type="submit" value="O   K" style="color:#000;font-size:x-small;" /><br />
						<input type="submit" value="ｽｷｯﾌﾟ" style="color:#000;font-size:x-small;" /><br />
					</form></div>
				</div><!--/.freegiftinfo-->
				</div><!--/.inner-->
		</div><!--/#freegift-->

</div><!--/#continar-->
<? require_once 'footer.php'; ?>