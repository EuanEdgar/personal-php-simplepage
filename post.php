<!DOCTYPE html>
<html>
<head>
	<?php
		include 'Assets/Scripts/setTitleById.php';
	?>
	<link rel="stylesheet" type="text/css" href="Assets/mainstyle.css">
	<link rel="stylesheet" type="text/css" href="Assets/post.css">
</head>
<body onload="addLineBreaks();">
	<div class="altheader">
			<h1 class="altheader">TITLE TEXT</h1>
			<h3 class="altheader">WEBSITE TAGLINE</h3>
		</div><!-- End of mainheader -->
	<?php include'Assets/Scripts/linksBar.php' ?>
	<div width="100%" style="width:100%; height:80%; background-color:#e0e0e0; text-align: center; margin-top:2%; border: 1px solid #050505;">
		<table cellpadding="0" cellspacing="0" align="center" width="100%">
			<tr>
				<td width="10%"></td><!--Left spacer-->
				<td width="70%" style="background-color:blue; text-align: left; padding-left: 30px; padding-right:10px; height: 1000px; overflow-y: scroll">
					<?php include'Assets/Scripts/getPost.php' ?>
				</td><!--Main post content-->
				<td width="20%"></td><!--Right spacer-->
			</tr>
		</table>
	</div>
	<script type="text/javascript">
	function addLineBreaks(){
		var textIn = getText();
		var containsBreak=false;
		for(var x = 0; x < textIn.length; x++){
			if(textIn.charAt(x)=='\n'){
				containsBreak=true;
				break;
			}//end if
		}//end for
		if(containsBreak){
			var textArray = textIn.split("\n");
			var textOut = "";
			for(var x = 0; x < textArray.length; x++){
				textOut = textOut+"<br>"+textArray[x];
			}//end for
			setText(textOut);
		}//end if
	}//end func

	function getText(){//Return text from paragraph
		var text = document.getElementsByClassName("post-text")[0].textContent;
		return text;
	}//end func

	function setText(str){//Set paragraph text
		document.getElementsByClassName("post-text")[0].innerHTML = str;
	}//end func
	</script>
</body>
</html>