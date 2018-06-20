<?php 
	include("db.php");

	$qna = $_POST['qna'];
	$id = $_POST['id'];
	
	$database = new Database();

	if ($qna == "answer") {
		$query_delete_qna = 'DELETE FROM qna__answers WHERE id = :fid';
		$database->query($query_delete_qna);
		$database->bind(':fid', $id);
		$database->execute();
	} else {
		try {
			$database->beginTransaction();

			$query_answer = "SELECT id FROM qna__answers WHERE question_id = :fquestion_id";
			$database->query($query_answer);
			$database->bind(':fquestion_id', $id);
			$database->execute();

			if ($database->rowCount() > 0) {
				$query_delete_answer = "DELETE FROM qna__answers WHERE question_id = :fquestion_id";
				$database->query($query_delete_answer);
				$database->bind(':fquestion_id', $id);
				$database->execute();
			}
			
			$query_delete_question = "DELETE FROM qna__questions WHERE id = :fid";
			$database->query($query_delete_question);
			$database->bind(':fid', $id);
			$database->execute();

			$database->endTransaction();
		} catch(Exception $e) {
			$database->cancelTransaction();
		}	
	}

	header('location: index.php');
