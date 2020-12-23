<?php
session_start();
	include 'includes/conn.php';

	if(isset($_POST['add'])){
		$firstname = strtoupper($_POST['firstname']);
		$lastname = strtoupper($_POST['lastname']);
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM team WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already taken';
		}
		else{
			// $password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['photo']['name'];
			$now = date('Y-m-d');
			if(!empty($filename)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
			}
			else{
				$_SESSION['error'] = 'please add file to upload';
			}
			try{
				$stmt = $conn->prepare("INSERT INTO team (email, firstname, lastname, phone, photo, status, title,description) VALUES (:email, :firstname, :lastname, :phone, :photo, :status, :title, :description)");
				$stmt->execute(['email'=>$email,'firstname'=>$firstname, 'lastname'=>$lastname, 'phone'=>$phone, 'photo'=>$filename, 'status'=>1, 'title'=>$title, 'description'=>$description]);
				$_SESSION['success'] = 'User added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

	header('location: index.php');

?>