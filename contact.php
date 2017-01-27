<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="Assets/mainstyle.css">
	<link rel="stylesheet" type="text/css" href="Assets/contact.css">
	<script>
	function check(){
		var name = document.getElementById("name");
		var email = document.getElementById("email");

		var exp = new RegExp("^.+@.+\..+$");
		if(name.value==""||email.value==""||text.value==""){
			alert("Please complete all the fields");
			return false;
		}else if(!exp.test(email.value)){
			alert("Your email address is not in a valid format");
			return false;
		}
	}
	</script>
</head>
<body>
	<div class="container">
		<header>
			<div class="altheader">
				<h1 class="altheader">TITLE TEXT</h1>
				<h3 class="altheader">WEBSITE TAGLINE</h3>
			</div>
		</header>

		<?php include'Assets/Scripts/linksbar.php'; ?>

	</div>
	<?php include'Assets/Scripts/sendContact.php' ?>
	<div width="100%" class="main-content-body">
		<table cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td width="30%"></td><!--Left spacer-->
				<td width="40%" class="form-body">
					<div class="form-body" style="text-align: center;">
						<?php if(strlen($_POST['name'])>0)echo "<div class=\"spacer-top\"><h2 class=\"feedback-sent\">Your feedback has been sent</h2> /div> <!--Top spacer-->"; ?>
						<h2>Contact us:</h2>
						<form action="contact.php" method="post" onsubmit="return check()">
							<table cellspacing="0" cellpadding="0" style="width:100%;">
								<tr>
									<td class="ali-right">
										<p>Name:&nbsp;</p>
									</td>
									<td class="ali-left">
										<input type="text" name="name" id="name">
									</td>
								</tr>
								<tr>
									<td class="ali-right">
										<p>Email address:&nbsp;</p>
									</td>
									<td class="ali-left">
										<input type="text" name="email" id="email">
									</td>
								</tr>
							</table>
							<p id="a">How can I help you?</p>
							<textarea name="text" style="resize:none; width:70%; height: 100px;" id="text"></textarea><br>
							<input type="submit" value="Submit">
						</form>
					</div>
				</td><!--Main form content-->
				<td width="30%"></td><!--Right spacer-->
			</tr>
		</table>
	</div>

	<div class="main-content-body">
		<div class="form-body" style="width:40%; margin-left:auto; margin-right:auto; background-color:#e0e0e0;">
			<?php if(strlen($_POST['name'])>0)echo "<div class=\"spacer-top\"><h2 class=\"feedback-sent\">Your feedback has been sent</h2> /div> <!--Top spacer-->"; ?>
				<h2 class="contactus">Contact us:</h2>
				<form action="contact.php" method="post" onsubmit="return check()">
					<div style="display: inline-block; text-align:right;">
						<p>Name:&nbsp;</p>
						<p>Email address:&nbsp;</p>
					</div>
					<div width="50%" style="position:relative; display: inline-block;">
						<input type="text" name="name" id="name">
						<p></p>
						<input type="text" name="email" id="email">
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include'Assets/Scripts/bottomText.php' ?>
</body>
</html>