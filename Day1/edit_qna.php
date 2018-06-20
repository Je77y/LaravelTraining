<?php 
	include("db.php");

	$qna = $_POST['qna'];
	$table = ( $qna == "answer" ? "qna__answers" : "qna__questions" );

// Question or Answer
	$id = $_POST['id'];
	$data = $_POST[$qna];

	$query_update_table = 'UPDATE ' . $table . '  SET ' . $qna . ' = :fdata WHERE id = :fid';

	$database = new Database();
	$database->query($query_update_table);
	$database->bind(':fdata', $data);
	$database->bind(':fid', $id);
	$database->execute();

	header('location: index.php');
