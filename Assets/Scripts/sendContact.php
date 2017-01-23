<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$text = $_POST['text'];

	if(strlen($name)>0&&strlen($email)>0&&strlen($text)>0){
		$conn;

		include'Assets/Scripts/connectToDatabase.php';

		$sql = "SELECT ID FROM simplepage.Contact ORDER BY ID Desc LIMIT 1";

		$result = $conn->query($sql);

		$id = 0;

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$id = $row['ID']+1;
			}
		}

		$sql = "INSERT INTO simplepage.Contact (ID, Name, Email, Message) VALUES(?, ?, ?, ?)";

		$stmt = $conn->prepare($sql);
		$stmt->bind_param('isss', $id, $name, $email, $text);

		$stmt->execute();
		$stmt->close();
	}
?>