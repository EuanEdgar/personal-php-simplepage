<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
			$category = $_GET["category"];
			if(strlen($category)>0){
				echo $category;
			}else{
				echo "Categories";
			}
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="Assets/mainstyle.css">
	<link rel="stylesheet" type="text/css" href="Assets/categories.css">
</head>
<body>
	<div class="altheader">
		<h1 class="altheader">TITLE TEXT</h1>
		<h3 class="altheader">WEBSITE TAGLINE</h3>
	</div><!-- End of mainheader -->
	<?php include'Assets/Scripts/linksBar.php'; ?>
	<?php
		$conn;
		include'Assets/Scripts/connectToDatabase.php';

		$category = $_GET["category"];
		$catGiven;
		if(strlen($category)>0)$catGiven = true;
		else $catGiven = false;

		if($catGiven)include'getPostsByCategory.php';
		else include 'getCategories.php';
	?>
</body>
</html>