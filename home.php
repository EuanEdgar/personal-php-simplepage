<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="Assets/mainstyle.css">
	<link rel="stylesheet" type="text/css" href="Assets/home.css">
	<link rel="stylesheet" type="text/css" href="Assets/media.css">

	<script src="Assets/Scripts/jquery-3.1.1.min.js"></script>
	<script src="Assets/Scripts/scotchPanels.js"></script>

	<script>
		$('#panel').scotchPanel({
    	containerSelector: 'body', // As a jQuery Selector
    	direction: 'left', // Make it toggle in from the left
    	duration: 300, // Speed in ms how fast you want it to be
    	transition: 'ease', // CSS3 transition type: linear, ease, ease-in, ease-out, ease-in-out, cubic-bezier(P1x,P1y,P2x,P2y)
    	clickSelector: '.toggle-panel', // Enables toggling when clicking elements of this class
    	distanceX: '70%', // Size fo the toggle
    	enableEscapeKey: true // Clicking Esc will close the panel
});
	</script>
</head>
	<body>
	<div class="burger-nav" id="panel">
    	<h2>Whatever you want in your panel</h2>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, blanditiis.</p>
	</div>
	<div class="container">
		<header>
			<div class="mainheader">
				<h1 class="mainheader">TITLE TEXT</h1>
				<h3 class="mainheader">WEBSITE TAGLINE</h3>
				<a href="" class="toggle-panel burger-nav">Toggle Panel</a>
			</div>
		</header>

		<?php include'Assets/Scripts/linksbar.php'; ?>

	</div>

	<?php include 'Assets/Scripts/getShortPosts.php'; ?>

	<?php include'Assets/Scripts/bottomText.php'; ?>
	</body><!-- End of page -->
</html>