
<?php
    
    if (isset($_POST['register']))
    {
    	$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];

    }
    else
    {
    	header('location: register.php'); //redirecting pages in PHP
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo "WELCOME " . $firstName ?></title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".btn1").click(function(){
				$("p").fadeIn(2000, function(){
				});
			});
			$(".btn2").click(function(){
				$("p").fadeOut(2000, function(){
				});
			});
		});
		</script>
		
		
	</head>

	<body >
	</body>

</html>