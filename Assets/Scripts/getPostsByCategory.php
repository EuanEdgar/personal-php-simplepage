<?php
	$conn;

	$category = $_GET["category"];

	include'connectToDatabase.php';
	include'printShortPost.php';

	$sql = "SELECT ID, Title, ShortText, ImagePath FROM simplepage.Post WHERE Category='".$category."' ORDER BY DateTime DESC";

	$result = $conn->query($sql);
	$ids;
	$titles;
	$shortText;
	$imagePaths;

	$numResults = $result->num_rows;
	$crow = 0;

	if($numResults){
		while($row = $result->fetch_assoc()){
			$ids[$crow] = $row["ID"];
			$titles[$crow] = $row["Title"];
			$shortText[$crow] = $row["ShortText"];
			$imagePaths[$crow] = $row["ImagePath"];
			$crow++;
		}
	}

	printShortPost(2,$numResults/2,$ids,$titles,$shortText,$imagePaths);
?>