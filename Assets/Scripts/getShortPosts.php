				<?php
				$conn;

				include'connectToDatabase.php';

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
				
				$cid=0;
				for($y=0;$y<2;$y++){
				echo "<tr>
						<td width=\"25%\"></td><!--Blank column -->";
						for($x=0;$x<2;$x++){
				echo	"<td class=\"short-post\">
							<table cellspacing=\"0\" cellpadding=\"3\" class=\"post\">
								<tr>
									<td>
										<div class=\"post-text\"><!-- Scrollable, title and short text -->
											<a class=\"post-title\" href=\"http://localhost:8888/simplepage/post.php?id=".$ids[$cid]."\"><h3 class=\"post-title\">".$titles[$cid]."</h3></a>
											<p class=\"post-short\">".$shortText[$cid]."</p>
										</div>
									</td>
									<td><!-- Image -->
										<img class=\"post-image\" src=\"".$imagePaths[$cid]."\">
									</td>
								</tr>
							</table>
						</td>";
					if($x!=1)echo "<td width=\"20\"></td><!--Blank column -->";
					$cid++;
				}
				echo	"<td width=\"25%\"></td><!--Blank column -->
					</tr>
					<tr>
						<td height=\"10\"></td>
					";
				}

			?>