<?php
	session_start();
	// include 'include/conn.php ';
include 'conn.php';

	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			
			if($row['numrows'] > 0){
		
					if(password_verify($password, $row['password'])){
					
							$_SESSION['admin'] = $row['id'];
							// header('location:adduser.php');
							// header('location: index.php');
						
					}
					else{
						$_SESSION['error'] = '<h2> You have typed an incorrect password please try again! </h2>';
					}
				}
			else{
				$_SESSION['error'] = '<h2>The Email you entered does not exist in the system ! please signup to create an account </h2>';
			}
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = ' <h2> Input login credentails first </h2>';
	}

	$pdo->close();

	header('location: index.php');

?>