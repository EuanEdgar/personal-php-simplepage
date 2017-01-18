<?php
	if(!$catGiven){
		echo "<div class=\"category-name\">
			<h2>All categories</h2>
		</div>";
	}else{
		echo "<div class=\"category-name\">
			<h2>Category: ".$category."</h2>
		</div>";
	}
?>