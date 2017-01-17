<?php
	$id = $_GET["id"];
	$conn;
	include'connectToDatabase.php';

	$sql = "SELECT Title, Text, ImagePath, Category FROM simplepage.Post WHERE ID=".$id;

	$result = $conn->query($sql);

	$title;
	$imageRef;
	$text;
	$category;

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
				$title = $row["Title"];
				$imageRef = $row["ImagePath"];
				$text = $row["Text"];
				$category = $row["Category"];
		}
	}

	echo "<h4><a href=\"http://localhost:8888/simplepage/home.php\" class=\"content-links\">> Home</a> <a href=\"http://localhost:8888/simplepage/categories.php\" class=\"content-links\">> Categories</a> <a href=\"http://localhost:8888/simplepage/categories.php?category=".$category."\" class=\"content-links\">> ".$category."</a>
	<h2>".$title."</h2>";
	if(strlen($imageRef)>0)echo "<img class=\"large\" src=\"".$imageRef."\">";
	echo "<p class=\"post-text\">".$text."</p>";
?>