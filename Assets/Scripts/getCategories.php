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

	echo "<table cellspacing=\"10\" cellpadding=\"0\">";

	$cid=0;
	for($y=0;$y<$numResults/2;$y++){
	echo "<tr>
			<td width=\"25%\"></td><!--Blank column -->";
			for($x=0;$x<2;$x++){
	echo	"<td class=\"short-post\">
				<table cellspacing=\"0\" cellpadding=\"3\" class=\"category\">
					<tr>
						<td>
							<div class=\"post-text\"><!-- Scrollable, title and short text -->
								<a class=\"post-title\" href=\"http://localhost:8888/simplepage/categories.php?category=".$categories[$cid]."\"><h3 class=\"post-title\">".$categories[$cid]."</h3></a>
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

	echo "</table>";
?>