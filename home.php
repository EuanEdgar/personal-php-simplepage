<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="Assets/mainstyle.css">
</head>
	<body>
	<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center;">
	<tr>
	<td>
		<div class="mainheader">
			<h1 class="mainheader">TITLE TEXT</h1>
			<h3 class="mainheader">WEBSITE TAGLINE</h3>
		</div><!-- End of mainheader -->
		<?php include'Assets/Scripts/linksbar.php';?>
		<div>
			<table cellspacing="10" cellpadding="0" class="linksbar">
			<!--PHP STARTS HERE-->
			<?php include 'Assets/Scripts/getShortPosts.php'; ?>
			</table>
			<!-- PHP ENDS -->
		</div>
	</td>
	</tr>
	</table><!-- End of main table -->
	<?php include'Assets/Scripts/bottomText.php'; ?>
	</body><!-- End of page -->
</html>