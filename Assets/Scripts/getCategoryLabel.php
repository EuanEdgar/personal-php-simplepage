<?php
	if(!$catGiven){
		echo "<div class=\"category-name\">
			<h2 class=\"cat-label\">All categories</h2>
		</div>";
	}else{
		echo "<div class=\"category-name\">
			<h2 class=\"cat-label\"><a href=\"http://localhost:8888/simplepage/categories.php\" class=\"categories-backlink\">Category</a>: ".$category."</h2>
		</div>";
	}
?>