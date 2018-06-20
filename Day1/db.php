<?php
 	const USERNAME = "root";
 	const PASSWORD = "12345678";
	try {
	  $conn = new PDO("mysql:host=localhost;dbname=training__qna", USERNAME, PASSWORD);

	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  echo 'Connected to the database.<br>';

	  $sql = 'SELECT question FROM qna__questions';
	  
	  
	  foreach ($conn->query($sql) as $row) {
	      print $row['question'] . "<br>";
	  }
	  $conn = null;

	}
	catch(PDOException $err) {
	  echo "ERROR: Unable to connect: " . $err->getMessage();
	}
?>
