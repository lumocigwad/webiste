<?php
	session_start();
	include 'includes/conn.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = strtoupper($_POST['firstname']);
		$lastname = strtoupper($_POST['lastname']);
		$email = $_POST['email'];
		$phone = $_POST['phone']; 
		$title = $_POST['title'];
		$description = $_POST['description'];
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE team SET email=:email, firstname=:firstname, lastname=:lastname, phone=:phone,title=:title, description=:description  WHERE id=:id");
			$stmt->execute(['email'=>$email, 'firstname'=>$firstname, 'lastname'=>$lastname,  'phone'=>$phone,'title'=>$title,'description'=>$description, 'id'=>$id]);
			$_SESSION['success'] = 'Team member details updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit user form first';
	}

	header('location: index.php');

?>