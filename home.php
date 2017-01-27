<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="Assets/mainstyle.css">
	<link rel="stylesheet" type="text/css" href="Assets/home.css">
	<link rel="stylesheet" type="text/css" href="Assets/media.css">
	<link rel="stylesheet" type="text/css" href="Assets/Pushy/pushy.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script>
		window.onload = function() {
	    if (window.jQuery) {  
	        // jQuery is loaded  
   		    alert("Yeah!");
    	} else {
        	// jQuery is not loaded
       		alert("Doesn't Work");
    		}
		}
	</script>
</head>
	<body>
	<nav class="pushy pushy-left burger-nav">
    	<ul>
        	<!-- Submenu -->
        	<li class="pushy-submenu">
            	<a href="#">Submenu</a>
            	<ul>
                	<li class="pushy-link"><a href="#">Item 1</a></li>
                	<li class="pushy-link"><a href="#">Item 2</a></li>
               		<li class="pushy-link"><a href="#">Item 3</a></li>
            	</ul>
        	</li>
        	<li class="pushy-link"><a href="#">Item 1</a></li>
       		<li class="pushy-link"><a href="#">Item 2</a></li>
    	</ul>
	</nav>

	<!-- Site Overlay -->
	<div class="site-overlay"></div>


	
	<div id="container">
    <!-- Menu Button -->
    <div class="menu-btn burger-nav">&#9776; Menu</div>
	<div class="container">
		<header>
			<div class="mainheader">
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