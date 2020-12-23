
<?php
include 'connect.php';
//user 
//strtolower() convert string to lowercase
$username= strtolower( mysqli_real_escape_string($conn, $_POST['username']));
  $email =strtolower( mysqli_real_escape_string($conn, $_POST['email']));
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password2 = mysqli_real_escape_string($conn, $_POST['input_passwordc']);
  $firstname = strtolower (mysqli_real_escape_string($conn, $_POST['firstname']));
  $secondname =strtolower( mysqli_real_escape_string($conn, $_POST['secondname']));
  $country =strtolower( mysqli_real_escape_string($conn, $_POST['country']));
 
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

  if ($password !== $password2) {
    //session to store error
    $_SESSION['ERROR']='<h4 style="color:#DE3C4B;"> Passwords do not match</h4>';
  //  echo "Username already exists";
  header('location: register.php');
    }
 // if user exists
    else if ($user['username'] === $username) {
		//session to store error
		$_SESSION['ERROR']='<h4 style="color:#DE3C4B;"> The username already exists</h4>';
	//  echo "Username already exists";
	header('location: register.php');
    }

   else if ($user['email'] === $email) {
	$_SESSION['ERROR']='<h4 style="color:#DE3C4B;"> The Email already exists try another one </h4>';
	 //echo "email already exists";
	 header('location: register.php');
    }
  else{
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (firstname, lastname, username, email, password, country)
VALUES ('$firstname', '$secondname','$username','$email','$password','$country')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  }
mysqli_close($conn);

?>
    

