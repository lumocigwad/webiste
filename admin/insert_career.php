<?php
session_start();
	include 'includes/conn.php';

	if(isset($_POST['add'])){
		$title = strtoupper($_POST['title']);
		$content = $_POST['content'];
		$conn = $pdo->open();
		try{
				$stmt = $conn->prepare("INSERT INTO positions (job_title,job_description,published) VALUES (:job_title, :job_description, :published)");
				$stmt->execute(['job_title'=>$title,'job_description'=>$content, 'published'=>1]);
				$_SESSION['success'] = 'Job Posted successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

	header('location: job_posting.php');

?>