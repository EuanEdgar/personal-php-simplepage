<?php
	$id = $_GET["id"];
	$conn;
	include'connectToDatabase.php';

	$sql = "SELECT Title, Text, ImagePath, Category, DateTime FROM simplepage.Post WHERE ID=".$id;

	$result = $conn->query($sql);

	$title;
	$imageRef;
	$text;
	$category;
	$dateTime;

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
				$title = $row["Title"];
				$imageRef = $row["ImagePath"];
				$text = $row["Text"];
				$category = $row["Category"];
				$dateTime = $row["DateTime"];
		}
	}

	echo "<table cellspacing=\"0\" cellpadding=\"0\" class=\"links-date\">
							<tr>
								<td>
									<h4><a href=\"http://localhost:8888/simplepage/home.php\" class=\"content-links\">> Home</a> <a href=\"http://localhost:8888/simplepage/categories.php\" class=\"content-links\">> Categories</a> <a href=\"http://localhost:8888/simplepage/categories.php?category=".$category."\" class=\"content-links\">> ".$category."</a></h4>
								</td>
								<td class=\"date\">
									<p>".$dateTime."</p>
								</td>
							</tr>
						</table>
	<h2>".$title."</h2>";
	if(strlen($imageRef)>0)echo "<img class=\"large\" src=\"".$imageRef."\">";
	echo "<p class=\"post-text\">".$text."</p>";
?>