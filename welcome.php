
<?php
    
    if (isset($_POST['register']))
    {
    	$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];

		echo "<h1>Welcome, " . $firstName . " " . $lastName . "!</h1><br />" .
		"Your ID number is " . $studentNo . " and your birthday is on " . $birthDate .
		"!<br />" . "Please verify your account using your email address: " . $emailAddress . ". <br />" .
		"<h1>THANK YOU VERY MUCH!</h1><br />" . "The time is " . date('r');

    }
    else
    {
    	header('location: register.php'); //redirecting pages in PHP
    }
?>
<!DOCTYPE html>
<html>

<head>
	<title>WELCOME PAGE</title>
</head>

<body>
</body>

</html>