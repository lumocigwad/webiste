<?php
	session_start();
	// include 'include/conn.php ';
include 'includes/conn.php';

	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		$_SESSION['admin']=null;

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			
			if($row['numrows'] > 0){
		
					if(password_verify($password, $row['password']))
					{
					
							$_SESSION['admin'] = $row['id'];
							$_SESSION['admin1']=$row['lastname'];
							//header('location:admin/adduser.php');
							header('location: index.php');
					}
			
			
					else{
						$_SESSION['error'] = 'You have typed an incorrect password please try again! ';
						header('location: reg.php');
					}
				}
			else{
				$_SESSION['error'] = 'The Email you entered does not exist in the system ! 
        ';
				header('location: reg.php');
			}
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
			
		}

	}
	else{
		$_SESSION['error'] = 'Input login credentails first';
		header('location: reg.php');
	}

	$pdo->close();

	

?>