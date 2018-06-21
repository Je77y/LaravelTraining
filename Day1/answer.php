<?php
	include("db.php");
	session_start();

	$question_id = $_POST['id'];
	$answer = $_POST['answer'];
	$user_id = $_SESSION['user_id'];

	$query_insert_anwer = "INSERT INTO qna__answers (answer, user_id, question_id) VALUES (:fanswer, :fuser_id, :fquestion_id)";

	$database = new Database();
	$database->query($query_insert_anwer);
	$database->bind(':fanswer', $answer);
	$database->bind(':fuser_id', $user_id);
	$database->bind(':fquestion_id', $question_id);
	$database->execute();

	$database->lastInsertId();

	header('location: index.php');
	
