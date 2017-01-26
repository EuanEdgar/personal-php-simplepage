				<?php
				$conn;

				include'connectToDatabase.php';

				include'printShortPost.php';

				$sql = "SELECT ID, Title, ShortText, ImagePath FROM simplepage.Post ORDER BY DateTime DESC LIMIT 4";
				$result = $conn->query($sql);

				$ids = [-1, -1, -1, -1];
				$titles = ["", "", "", ""];
				$shortText = ["", "", "", ""];
				$imagePaths = ["", "", "", ""];
				$crow = 0;
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						$ids[$crow] = $row["ID"];
						$titles[$crow] = $row["Title"];
						$shortText[$crow] = $row["ShortText"];
						$imagePaths[$crow] = $row["ImagePath"];
						$crow++;
					}
				}

				printShortPost(2,2,$ids,$titles,$shortText,$imagePaths);
			?>