<?php
	function printShortPost($columns, $rows, $ids, $titles, $shortText, $imagePaths){
		$cid = 0;
				echo "<div class=\"content-container\">";
				for($y=0;$y<$rows;$y++){
					echo "<div class=\"row\">";//Start row
					for($x=0;$x<$columns;$x++){
					echo    "<div class=\"column\">
								<div class=\"column-row\">
									<div class=\"internal-column\">
										<div class=\"text-content\">
											<a href=\"post.php?id=".$ids[$cid]."\" class=\"post-title\"><h3>".$titles[$cid]."</h3></a>
											<p class=\"post-short\">".$shortText[$cid]."</p>
										</div>
									</div>
									<div class=\"internal-column\">
										<div class=\"image\" style=\"background-image: url('".$imagePaths[$cid]."');\"></div>
									</div>
								</div>
							</div>";
						$cid++;
					}
					echo "</div>";//end row
				}
				echo "</div>";
	}
?>