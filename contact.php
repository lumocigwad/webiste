<?php
	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
   
    include 'connect.php';


    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

		// $conn = $pdo->open();

		// $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		// $stmt->execute(['email'=>$email]);
		// $row = $stmt->fetch();

		// if($row['numrows'] > 0){
		// 	//generate code
		// 	$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		// 	$code=substr(str_shuffle($set), 0, 15);
		// 	try{
		// 		$stmt = $conn->prepare("UPDATE users SET reset_code=:code WHERE id=:id");
		// 		$stmt->execute(['code'=>$code, 'id'=>$row['id']]);
				
		// 		$message = "
		// 			<h2>Password Reset</h2>
		// 			<p>Your Account:</p>
		// 			<p>Email: ".$email."</p>
		// 			<p>Please click the link below to reset your password.</p>
		// 			<a href='http://localhost/listing/password_reset.php?code=".$code."&user=".$row['id']."'>Reset Password</a>
		// 		";

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
                    // $mail->addAddressFrom($email);                                 

			        $mail->setFrom($email);
			        
			        //Recipients
			        $mail->addAddress('jwandor97@gmail.com');              
			        $mail->addReplyTo($email);
			       
			        //Content
			        $mail->isHTML(true);                                  
			        $mail->Subject = $subject;
			        $mail->Body    = $message;

                   $mail->send($email,$message,$subject);
                
           
			        $_SESSION['success'] = 'your message has been received';
			     
			    } 
                catch (Exception $e) 
                {
			        $_SESSION['error'] = '<h2> Message could not be sent. Mailer Error: </h2>'.$mail->ErrorInfo;
			    }
			
		// 	catch (PDOException $e){
		// 		$_SESSION['error'] = $e->getMessage();
		// 	}
		// else if {
		// 	$_SESSION['error'] = '<h2>Email not found </h2>';
		// }

		$conn->close();

	}
	// else{
	// 	$_SESSION['error'] = '<h2> Input email associated with account </h2>';
	// }

	// header('location: .php');

?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Computer Castles Limited || Your Number One ERP Sacco Sytems Software Solutions Provider</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/ico" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900&amp;display=swap" rel="stylesheet">
    <script src="js/site.js" async></script>
</head>

<body>
    <div id="main-nav" class="transparent-headr solid-header">
        <div class="menu-bg-wrapper">
            <div class="menu-bg"></div>
            <div class="menu-arrow"></div>
        </div>
        <div class="row-container">
            <?php
                include "navbar.php";
            ?>
            <span class="hamburger">
                <span></span>
            <span></span>
            <span></span>
            </span>
        </div>
    </div>
    <section>
        <div class="row-container narrow">
            <div class="row">
                <div class="column-container">
                    <div class="column centered">
                    <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
                        <h1>Contact Us</h1>
                        <p class="lead">Please get in touch if you have any questions or for Technical Support</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-container narrow">
            <div id="contact-cards" class="row">
                <div class="column-container">
                    <div class="column blurb card accent-purple centered">
                        <svg class="icon-big">
                            <path class="transparent" d="M0,32C0,14.33,14.33,0,32,0s32,14.33,32,32S49.67,64,32,64S0,49.67,0,32z" />
                            <path d="M47,50.1c0,9.86-30,9.86-30,0c0-14.4,7.12-21.6,15-21.6S47,35.7,47,50.1z M41,15.5c0,4.82-4.18,9-9,9 s-9-4.18-9-9s4.18-9,9-9S41,10.68,41,15.5z" />
                        </svg>
                        <h2 class="card-title">Contact Us</h2>
                        <p>Send us an email if you have any questions about Computer Castles Limited, Want to set up a meeting or demo</p>
                        <form name="et-contactform" id="et_manage_form" action="contact.php" method="post">
                            <div class="et_manage_input">
                                <input type="text" placeholder="Name" autocomplete="off" name="name" value="" size="20" tabindex="10" required="">
                                <label>Name</label>
                            </div>
                            <div class="et_manage_input">
                                <input type="email"  placeholder="Email Address" autocomplete="off" name="email" value="" size="20" tabindex="20" required="">
                                <label>Email Address</label>
                            </div>
                            <div class="et_manage_input et_filled">
                                <select tabindex="30"  name="subject" required="">
                                    <option value="General Enquiry">General Enquiry</option>
                                    <option value="Careers">Careers</option>
                                    <option value="Demo">Demo</option> 
                                    <option value="Meeting">Meeting</option> 
                                    <option value="other">Other</option> 
                                </select>
                                <label>What can we help you with?</label>
                            </div>
                            <div class="et_manage_input et_manage_textarea">
                                <textarea type="text" rows="4"  placeholder="Your Message" autocomplete="off" name="message" tabindex="40" required=""></textarea>
                                <label>Your Message</label>
                            </div>
                            <input class="button primary-button fullwidth-button" type="submit" name="submit"  value="Submit Message" tabindex="100">
                        </form>
                    </div>
                </div>
                <!-- <div class="column-container">
                    <div class="column card accent-light-blue centered">
                        <div class="column blurb centered">
                            <svg class="icon-big">
                                <path d="M26.02,19.73l18.92,18.92c4.28-1.62,9.3-0.71,12.75,2.74c3.69,3.69,4.48,9.2,2.35,13.66l-7.05-7.05 c-1.55-1.55-4.05-1.55-5.6,0c-1.55,1.55-1.55,4.05,0,5.6l7.07,7.07c-4.47,2.18-10.02,1.41-13.74-2.31 c-3.42-3.42-4.35-8.4-2.77-12.67L18.98,26.72c-4.26,1.58-9.24,0.66-12.67-2.77c-3.69-3.69-4.48-9.2-2.35-13.66l7.05,7.05 c1.55,1.55,4.05,1.55,5.6,0c1.55-1.55,1.55-4.05,0-5.6L9.55,4.68c4.47-2.18,10.02-1.41,13.74,2.31 C26.73,10.43,27.64,15.45,26.02,19.73z" />
                                <path class="transparent" d="M13.02,47.4l13.32-13.32l-1.62-1.62L49.93,2.92c1.22-1.22,3.18-1.22,4.4,0l6.47,6.49c1.22,1.22,1.22,3.2,0,4.42 L31.6,39.34l-1.78-1.79L16.5,50.88l-4.51,8.51l-6.54,2.54l-3.48-3.48l2.67-6.67L13.02,47.4z" />
                            </svg>
                            <h2 class="card-title">Technical Support</h2>
                            <p>If you need help, you can reach our support team!</p>
                            <a href="support/index.html" class="button primary-button fullwidth-button launch_intercom">Raise an Issue with Our Support System</a>
                        </div>
                        <a href="#" class="button tertiary-button fullwidth-button">Browse Documentation</a>
                        <a href="http://localhost/computercastleswebsite/blog.php" class="button tertiary-button fullwidth-button">Explore the Blog</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <section id="main-footer">
        <div class="row-container narrow">
            <!-- <div id="social-accounts" class="row small-gutters three-column-tablet two-column-phone">
                <div class="column-container">
                    <a id="facebook" rel="noreferrer" href="#" class="column card card-small elevation-1 centered accent-blue" target="_blank">
                        <svg viewbox="0 0 28 28" class="icon-small">
                            <path d="M17.35,14H15l0,9l-3,0v-9l-2,0v-3h2V9.07C12,5,15.69,5,15.69,5L18,5l0,3l-1.93,0C15.45,8,15,8.42,15,9.2l0,1.8
                            l2.67,0L17.35,14z" />
                        </svg>
                        <span>130k</span>Followers
                    </a>
                </div>
                <div class="column-container">
                    <a id="facebook-group" rel="noreferrer" href="#" class="column card card-small elevation-1 centered accent-light-blue" target="_blank">
                        <svg viewbox="0 0 28 28" class="icon-small">
                            <path class="transparent"
                                d="M10,18.21c0,2.38-6,2.38-6,0C4,14.74,5.42,13,7,13C8.58,13,10,14.74,10,18.21z M7,8c-1.1,0-2,0.9-2,2s0.9,2,2,2 s2-0.9,2-2S8.1,8,7,8z" />
                            <path class="transparent"
                                d="M24,18.21c0,2.38-6,2.38-6,0c0-3.48,1.42-5.21,3-5.21C22.58,13,24,14.74,24,18.21z M21,8c-1.1,0-2,0.9-2,2 s0.9,2,2,2s2-0.9,2-2S22.1,8,21,8z" />
                            <path
                                d="M19,20c0,4-10,4-10,0c0-4.74,2.26-7,5-7S19,15.26,19,20z M17,9c0,1.66-1.34,3-3,3s-3-1.34-3-3s1.34-3,3-3 S17,7.34,17,9z" />
                        </svg>
                        <span>35k</span> Members
                    </a>
                </div>
                <div class="column-container">
                    <a id="twitter" rel="noreferrer" href="#" class="column card card-small elevation-1 centered accent-teal" target="_blank">
                        <svg viewbox="0 0 28 28" class="icon-small">
                            <path
                                d="M22.34,9.04c-0.61,0.26-1.27,0.44-1.96,0.52c0.71-0.41,1.25-1.05,1.5-1.82c-0.66,0.38-1.39,0.65-2.17,0.8 c-0.62-0.64-1.51-1.04-2.5-1.04c-1.89,0-3.42,1.47-3.42,3.28c0,0.26,0.03,0.51,0.09,0.75c-2.84-0.14-5.36-1.45-7.05-3.43 C6.53,8.58,6.37,9.15,6.37,9.75c0,1.14,0.6,2.14,1.52,2.73c-0.56-0.02-1.09-0.17-1.55-0.41c0,0.01,0,0.03,0,0.04 c0,1.59,1.18,2.92,2.74,3.22c-0.29,0.07-0.59,0.11-0.9,0.11c-0.22,0-0.43-0.02-0.64-0.06c0.44,1.3,1.7,2.25,3.19,2.28 c-1.17,0.88-2.65,1.4-4.25,1.4c-0.28,0-0.55-0.02-0.82-0.05c1.51,0.93,3.31,1.48,5.24,1.48c6.29,0,9.73-5,9.73-9.34 c0-0.14,0-0.28-0.01-0.43C21.3,10.28,21.88,9.7,22.34,9.04z" />
                        </svg>
                        <span>47k</span> Followers
                    </a>
                </div>
                <div class="column-container">
                    <a id="email" href="#" class="column card card-small elevation-1 centered accent-gray">
                        <svg viewbox="0 0 28 28" class="icon-small">
                            <path
                                d="M14,15.51l8-3.2L22,19c0,0.55-0.45,1-1,1L7,20c-0.55,0-1-0.45-1-1l0-6.69L14,15.51z M22,10.68l-8,3.2l-8-3.2 L6,9c0-0.55,0.45-1,1-1l14,0c0.55,0,1,0.45,1,1L22,10.68z" />
                        </svg>
                        <span>291k</span> Subscribers
                    </a>
                </div>
            </div> -->
            <div id="footer-menu" class="row three-column-tablet two-column-phone">
                <div class="column-container">
                    <div class="column">
                        <a href="index.php">
                            <h3>Computer Castles Limited</h3>
                        </a>
                        <ul class="link-list">
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                            <li>
                                <a href="contact.php">Book a Demo</a>
                            </li>
                            <li>
                                <a href="#">Partners & Clients</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column-container">
                    <div class="column">
                        <a href="portfolio.php">
                            <h3>Products</h3>
                        </a>
                        <ul class="link-list">
                            <li>
                                <a href="portfolio.php">CEMAS</a>
                            </li>
                            <li>
                                <a href="portfolio.php">ASMAS</a>
                            </li>
                            <li>
                                <a href="portfolio.php">ATM Bridge</a>
                            </li>
                            <li>
                                <a href="portfolio.php">PSV Collection System</a>
                            </li>
                            <li>
                                <a href="portfolio.php">Others</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column-container">
                    <div class="column">
                        <a href="#">
                            <h3>Blog</h3>
                        </a>
                        <ul class="link-list">
                            <li>
                                <a href="blog.php">Recent Posts</a>
                            </li>
                            <li>
                                <a href="blog.php">Product Updates</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column-container">
                    <div class="column centered">
                        <p>Copyright &copy; 2019 Computer Castles Limited &reg;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- <script type="text/javascript" src="/js/cookie.js"></script> -->
    <!-- <script type="text/javascript" src="/js/cookie-consent.js"></script> -->
    <script type="text/javascript" src="js/intersectional-observer.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="js/magnificpopup.js"></script>
    <script type="text/javascript" src="js/relax.js"></script>
    <script type="text/javascript" src="js/allpages.js"></script>
    <script type="text/javascript" src="js/optin.js"></script>
    <script type="text/javascript" src="content-common.js"></script>
</body>

</html>