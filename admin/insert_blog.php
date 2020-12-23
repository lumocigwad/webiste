<?php
session_start();
	include 'includes/conn.php';

	if(isset($_POST['add'])){
		// $author = strtoupper($_POST['author']);
		$title = $_POST['title'];
		$content = $_POST['content'];
		$conn = $pdo->open();
$date = date('Y-m-d H:i');
		try{
				$stmt = $conn->prepare("INSERT INTO posts (title, content,published,created_at) VALUES (:title, :content, :published, :created_at)");
				$stmt->execute(['title'=>$title,'content'=>$content, 'published'=>1,'created_at'=>$date]);
				$_SESSION['success'] = 'Blog posted successfully!';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

	header('location: manage_blog.php');

?>