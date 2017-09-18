<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="Assets/mainstyle.css">
	<link rel="stylesheet" type="text/css" href="Assets/home.css">
	<link rel="stylesheet" type="text/css" href="Assets/homemedia.css">

	<link rel="stylesheet" type="text/css" href="Assets/Pushy/pushy.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
	<body>
	<nav class="pushy pushy-left burger-nav">
    	<ul>
        	<li class="pushy-link"><a href="home.php">Home</a></li>
            <li class="pushy-link"><a href="categories.php">Categories</a></li>
            <li class="pushy-link"><a href="contact.php">Contact us</a></li>
    	</ul>
	</nav>

	<!-- Site Overlay -->
	<div class="site-overlay" style="background-image:url(Assets/Images/Cat.jpg); background-position: center bottom; background-repeat: no-repeat; background-size: cover"></div>


	
	<div id="container">
    <!-- Menu Button -->
	<div class="container">
		<header>
			<div class="mainheader">
				<div class="menu-btn burger-nav">&#9776; Menu</div>
				<h1 class="mainheader">TITLE TEXT</h1>
				<h3 class="mainheader">WEBSITE TAGLINE</h3>
			</div>
		</header>

		<?php include'Assets/Scripts/linksbar.php'; ?>

	</div>
	</div>

	<?php include 'Assets/Scripts/getShortPosts.php'; ?>

	<?php include'Assets/Scripts/bottomText.php'; ?>

	<script src="Assets/Pushy/pushy.min.js"></script>
	</body><!-- End of page -->
</html>