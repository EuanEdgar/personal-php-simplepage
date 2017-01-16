<!DOCTYPE html>
<html>
<head>
	<?php
		include 'Assets/Scripts/setTitleById.php';
	?>
	<link rel="stylesheet" type="text/css" href="Assets/mainstyle.css">
</head>
<body>
	<div class="altheader">
			<h1 class="altheader">TITLE TEXT</h1>
			<h3 class="altheader">WEBSITE TAGLINE</h3>
		</div><!-- End of mainheader -->
	<?php include'Assets/Scripts/linksBar.php' ?>
	<div width="100%" style="width:100%; height:80%; background-color:#e0e0e0; text-align: center; margin-top:2%; border: 1px solid #050505;">
		<table cellpadding="0" cellspacing="0" align="center" width="100%">
			<tr>
				<td width="10%"></td><!--Left spacer-->
				<td width="70%" style="background-color:blue; text-align: left; padding-left: 30px;">
					<?php include'Assets/Scripts/getPost.php' ?>
				</td><!--Main post content-->
				<td width="20%"></td><!--Right spacer-->
			</tr>
		</table>
	</div>
</body>
</html>