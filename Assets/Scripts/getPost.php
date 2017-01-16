<?php
	$id = $_GET["id"];
	$conn;
	include'connectToDatabase.php';

	$sql = "SELECT Title, Text, ImagePath FROM simplepage.Post WHERE ID=".$id;

	$result = $conn->query($sql);

	$title;
	$imageRef;
	$text;

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
				$title = $row["Title"];
				$imageRef = $row["ImagePath"];
				$text = $row["Text"];
		}
	}

	echo "<h2>".$title."</h2>
	<img class=\"large\" src=\"".$imageRef."\">
	<p>".$text."</p>"
?>