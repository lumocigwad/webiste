<?php
	session_start();
	include 'includes/conn.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$title = strtoupper($_POST['title']);
		$content = $_POST['content'];
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE posts SET title=:title, content=:content WHERE id=:id");
			$stmt->execute(['title'=>$title, 'content'=>$content,'id'=>$id]);
			$_SESSION['success'] = 'Blog updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit user form first';
	}

	header('location: manage_blog.php');

?>