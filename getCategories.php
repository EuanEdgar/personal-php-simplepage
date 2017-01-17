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



	$cid=0;
	echo "<table cellspacing:\"10\" cellpadding:\"0\">";
	for($y=0;$y<$numResults/2;$y++){
	echo "
		<tr>
		<td width=\"25%\"></td><!--Blank column -->";
		for($x=0;$x<2;$x++){
	echo	"
				<td>
					<table class=\"category\">
						<tr>
							<td>
								<a href=\"http://localhost:8888/simplepage/categories.php?category=".$categories[$cid]."\" class=\"category-name\"><h1>".$categories[$cid]."</h1></a>
							</td>
							<td>
								<img src=\"".$imagePaths[$cid]."\" class=\"category-image\">
							</td>
						</tr>
					</table>
				</td>
			";
		if($x!=1)echo "<td class=\"blank-2\"></td><!--Blank column -->";
		$cid++;
	}//end internal for
	echo	"<td width=\"25%\"></td><!--Blank column -->
		</tr>
		<tr>
			<td height=\"10\"></td><!--Blank row-->
		";
	}
	echo "</table>";
?>