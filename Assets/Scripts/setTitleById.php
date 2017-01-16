<?php
		$id = $_GET["id"];
		
		include'connectToDatabase.php';

		$sql = "SELECT Title FROM simplepage.Post WHERE ID=".$id;
		$result = $conn->query($sql);

		$title = "";

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "<title>".$row["Title"]."</title>";
			}
		}
	?>