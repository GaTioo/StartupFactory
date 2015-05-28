<?php
if (file_exists('include/head.php')) { include_once('include/head.php'); }
else {echo "Грешка при include";}
?>
<body>
<center>

<?php
if (file_exists('include/bgtop.php')) { include_once('include/bgtop.php'); }
else {echo "Грешка при include";}
?>

<<div class="header">

</div>

<div class="content">

<?php
$page = "index";
if (file_exists('include/menu.php')) { include_once('include/menu.php'); }
else {echo "Грешка при include";}
?>

<div class="center">


<center>
<div id="container">
		<div id="example">
			<img src="images/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon">
			<div id="slides">
			<div class="slides_container">

<?php
include ("config.php");
function secure($var) {
return htmlspecialchars(addslashes($var));
}
$id = secure(@$_GET['id']);
$query = "SELECT * FROM urok WHERE active = 1 ORDER BY RAND() LIMIT 5";
$result = mysql_query($query) or die(mysql_error());
while ($sql = mysql_fetch_object($result)) {
$title = $sql -> title;
$ime = $sql -> ime;
$opisanie = $sql -> opisanie;
$img = $sql -> img;
$skype = $sql -> skype;
$email = $sql -> email;
$id = $sql -> id;

echo "

					<div class=\"slide\">
						<a href=\"view.php?id=$id\" title=\"$title\"><img src=\"$img\" alt=\"Slide 1\"></a>
						<div class=\"caption\" style=\"bottom:0\">
							<a href=\"view.php?id=$id\" title=\"$title\" style=\"color: #ffffff;\"><p>$title</p></a>
						</div>
					</div>

"; }

?>
				</div>
				<a href="#" class="prev"><img src="images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
			</div>
			<img src="images/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">
		</div>
	</div>
</center>


<div class="left">

<h2 class="title"><b>Малко</b> промени</h2>
<h2>Ако има новоизлезли проблеми, моля пишете ми в скайп на gatio_93. Благодаря!</h2>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffrome2u.net&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
<br /><br /><br />


</div>

<?php
if (file_exists('include/right.php')) { include_once('include/right.php'); }
else {echo "Грешка при include";}
?>

<div style="clear: both;"></div>
</div></div><br />

</center>
</body>
</html>