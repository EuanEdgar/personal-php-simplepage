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
	<div class="container">
		<header>
			<div class="altheader">
				<h1 class="altheader">TITLE TEXT</h1>
				<h3 class="altheader">WEBSITE TAGLINE</h3>
			</div>
		</header>

		<?php include'Assets/Scripts/linksbar.php'; ?>

	</div>

	<div style="overflow-y: scroll; height:72vh;">
		<?php
			$conn;
			include'Assets/Scripts/connectToDatabase.php';

			$category = $_GET["category"];
			$catGiven;
			if(strlen($category)>0)$catGiven = true;
			else $catGiven = false;

			include'Assets/Scripts/getCategoryLabel.php';

			if($catGiven)include'Assets/Scripts/getPostsByCategory.php';
			else include 'Assets/Scripts/getCategories.php';
		?>
	</div>
	<?php include'Assets/Scripts/bottomText.php'; ?>
</body>
</html>