<?php
session_start();
	include 'includes/conn.php';

	if(isset($_POST['deactivate'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE posts SET published=:status WHERE id=:id");
			$stmt->execute(['status'=>0, 'id'=>$id]);
			$_SESSION['success'] = 'Blog <strong>Unpublished</strong> successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select user to activate first';
	}

	header('location: manage_blog.php');
?>