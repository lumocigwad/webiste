<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
session_start();
	include 'includes/conn.php';

	if(isset($_POST['reset'])){
		$email = $_POST['email'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			//generate code
			$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code=substr(str_shuffle($set), 0, 15);
			try{
				$stmt = $conn->prepare("UPDATE users SET reset_code=:code WHERE id=:id");
				$stmt->execute(['code'=>$code, 'id'=>$row['id']]);
				
				$message = "
					<h2>Password Reset</h2>
					<p>Your Account:</p>
					<p>Email: ".$email."</p>
					<p>Please click the link below to reset your password.</p>
					<a href='http://localhost/listing/password_reset.php?code=".$code."&user=".$row['id']."'>Reset Password</a>
				";

				//Load phpmailer
	    		require 'vendor/autoload.php';

	    		$mail = new PHPMailer(true);                             
			    try {
			        //Server settings
			        $mail->isSMTP();                                     
			        $mail->Host = 'smtp.gmail.com';                      
			        $mail->SMTPAuth = true;                               
			        $mail->Username = 'dennis.lumosi@gmail.com';     
			        $mail->Password = 'lumoci33210488';                    
			        $mail->SMTPOptions = array(
			            'ssl' => array(
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            )
			        );                         
			        $mail->SMTPSecure = 'tls';                           
			        $mail->Port = 587;                                   

			        $mail->setFrom('info@ihostel.com');
			        
			        //Recipients
			        $mail->addAddress($email);              
			        $mail->addReplyTo('info@ihostel.com');
			       
			        //Content
			        $mail->isHTML(true);                                  
			        $mail->Subject = 'Computer Castles';
			        $mail->Body    = $message;

			        $mail->send();

			        $_SESSION['success'] = 'check your Email for Password reset link sent';
			     
			    } 
			    catch (Exception $e) {
			        $_SESSION['error'] = '<h2> Message could not be sent. Mailer Error: </h2>'.$mail->ErrorInfo;
			    }
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}
		else{
			$_SESSION['error'] = '<h2>Email not found </h2>';
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = '<h2> Input email associated with account </h2>';
	}

	header('location: forgot.php');

?>