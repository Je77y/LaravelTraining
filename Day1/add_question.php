<?php
	include("db.php");

	$question = $_GET['question'];
	$query = "INSERT INTO qna__questions (question) VALUES (:fquestion)";
	
	$database = new Database();
	$database->query($query);
	$database->bind(':fquestion', $question);
	$database->execute();
	
	header('location: index.php');
