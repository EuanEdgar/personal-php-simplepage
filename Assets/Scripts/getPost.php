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

	echo "<a href=\"localhost:8888/simplepage/categories?cat=".$category."\"><h4>".$category."</h4></a>
	<h2>".$title."</h2>
	<img class=\"large\" src=\"".$imageRef."\">
	<p class=\"post-text\">".$text."</p>"
?>