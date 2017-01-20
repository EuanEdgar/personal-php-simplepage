<?php
	$id = $_GET["id"];
	$conn;
	include'connectToDatabase.php';

	$sql = "SELECT Title, Text, ShortText, ImagePath, Category, DateTime FROM simplepage.Post WHERE ID=".$id;

	$result = $conn->query($sql);

	$title;
	$imageRef;
	$text;
	$shortText;
	$category;
	$dateTime;

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
				$title = $row["Title"];
				$imageRef = $row["ImagePath"];
				$text = $row["Text"];
				$shortText = $row["ShortText"];
				$category = $row["Category"];
				$dateTime = $row["DateTime"];
		}
	}

	echo "<table cellspacing=\"0\" cellpadding=\"0\" class=\"links-date\">
							<tr>
								<td>
									<h4><a href=\"home.php\" class=\"content-links\">> Home</a> <a href=\"categories.php\" class=\"content-links\">> Categories</a> <a href=\"categories.php?category=".$category."\" class=\"content-links\">> ".$category."</a></h4>
								</td>
								<td class=\"date\">
									<p>".$dateTime."</p>
								</td>
							</tr>
						</table>
	<h2>".$title."</h2>";
	if(strlen($imageRef)>0)echo "
		<table cellspacing=\"10\" cellpading=\"0\">
			<tr>
				<td>
					<img class=\"large\" src=\"".$imageRef."\">
				</td>
				<td>
					<h4 classs=\"short-text\">".$shortText."</h4>
				</td>
			</tr>
		</table>";
	else echo "<h4 class=\"short-text-no-image\">".$shortText."</h4>";
	echo "<p class=\"post-text\">".$text."</p>";
?>