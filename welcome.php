
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

	<body background="https://s-media-cache-ak0.pinimg.com/originals/89/ea/66/89ea66653c891c5eef747846379b12ea.jpg">
		
		<div class="container">
			<h1 class="text-center"><font color="white" style="font-family:	Impact" size="30">
				<?php echo "<h1>Welcome, " . $firstName . " " . $lastName . "!</h1><br />" ?>
			</font></h1>

			<div class="col-lg-offset-3 col-lg-6">
				<div class="well">
				
				
				<?php echo "<h1>Welcome, " . $firstName . " " . $lastName . "!</h1><br />" .
		"Your ID number is " . $studentNo . " and your birthday is on " . $birthDate .
		"!<br />" . "Please verify your account using your email address: " . $emailAddress . ". <br />" .
		"<h1>THANK YOU VERY MUCH!</h1><br />" . "The time is " . date('r');
				?>
				
				</div>
				
			<button class="btn1">SHOW CREDENTIALS</button>
			<button class="btn2">HIDE CREDENTIALS</button>
			
			<br />
			
			<br />
			
			</div>

		</div>

				
	</body>

</html>