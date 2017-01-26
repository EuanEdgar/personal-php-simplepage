<?php

$sql = "SELECT DISTINCT Post.* FROM (SELECT DISTINCT Category, ImagePath FROM simplepage.Post WHERE NOT ImagePath='' ORDER BY DateTime DESC)AS Post GROUP BY Category";

	$result = $conn->query($sql);

	$categories;
	$imagePaths;

	$crow = 0;

	$numResults = $result->num_rows;

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$categories[$crow]=$row["Category"];
			$imagePaths[$crow]=$row["ImagePath"];
			$crow++;
		}
	}

	$cid = 0;
	for($y=0;$y<$numResults/2;$y++){
	echo "<div class=\"content-container\">
			<div class=\"row\">";
			for($x=0;$x<2;$x++){
				echo "<div class=\"column\">
					<div class=\"column-row\">
						<div class=\"internal-column\">
							<div class=\"text-content\">
								<a href=\"categories.php?category=".$categories[$cid]."\" class=\"post-title\"><h3>".$categories[$cid]."</h3></a>
							</div>
						</div>
						<div class=\"internal-column\">
							<div class=\"image\" style=\"background-image: url('".$imagePaths[$cid]."');\"></div>
						</div>
					</div>
				</div>";
				$cid++;
			}
			echo "</div>
		</div>";
	}
?>