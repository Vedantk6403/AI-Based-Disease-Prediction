<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login/Signup</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
	<link rel="stylesheet" href="includes/css/login.css">

</head>

<body>

	<?php
	require 'includes/_dbconnect.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if (isset($_POST["Name"])) {
			$Name = $_POST["Name"];
			$Email = $_POST["Email"];
			$password = $_POST["password"];
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$checksql = "SELECT * FROM `users` WHERE `name` LIKE '$Name'";
			$sqlcheck = mysqli_query($conn, $checksql);
			$checkval = mysqli_num_rows($sqlcheck);
			if ($checkval) {
				echo '<div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
			<strong>Warning!</strong> Username already exsists, Try to enter a new one.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
			} else {
				$sql = "INSERT INTO `users` (`name`, `email`, `pass`) VALUES ('$Name', '$Email', '$hash');";
				$val = mysqli_query($conn, $sql);

				if ($val) {
					echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
							<strong>Success!</strong> Your account has been created successfully.
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
					header("Refresh: 0");
				} else {
					echo '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
							<strong>Error!</strong> Please check the input data.
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
				}
			}
		} 
		elseif(isset($_POST["username"])) {
			$Name = $_POST["username"];
			$Password = $_POST["pass"];
			$sql = "SELECT * FROM `users` WHERE `email` LIKE '$Name';";
			$val = mysqli_query($conn, $sql);
			$check = mysqli_num_rows($val);
			while ($row = mysqli_fetch_assoc($val)) {

				$verify = password_verify($Password, $row['pass']);
				$userid = $row['id'];

				if ($check == 1 && $verify) {
					$_SESSION['login'] = true;
					$_SESSION['user'] = $userid;
					header('location:/miniproject/index.php');
				} else {
					echo '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                    <strong>Error!</strong> Please check the input data.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>';
				}
			}
		}
	}


	?>




<?php 
$login = false;
require 'includes/navbar.php';
?>

	<!-- partial:index.partial.html -->
	<section id="form-sec">
		<div class="container2" id="container">
			<div class="form-container2 sign-up-container2">
				<form action="#" method="post">
					<h1>Create Account</h1>
					<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
					<span>or use your email for registration</span>
					<input type="text" placeholder="Name" name="Name" id="Name" />
					<input type="email" placeholder="Email" name="Email" id="Email" />
					<input type="password" placeholder="Password" name="password" id="password" />
					<button>Sign Up</button>
				</form>
			</div>


			<div class="form-container2 sign-in-container2">
				<form action="#" method="post">
					<h1>Sign in</h1>
					<!-- <div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div> -->
					<span>or use your account</span>
					<input type="email" placeholder="Email" name="username" id="username" />
					<input type="password" placeholder="Password" name="pass" id="pass" />
					<a href="#">Forgot your password?</a>
					<button>Sign In</button>
				</form>
			</div>
			<div class="overlay-container2">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Welcome Back!</h1>
						<p>To keep connected with us please login with your personal info</p>
						<button class="ghost" id="signIn">Sign In</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Hello, Friend!</h1>
						<p>Enter your personal details and start journey with us</p>
						<button class="ghost" id="signUp">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php require 'includes/footer.php'; ?>
	<!-- partial -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="includes/js/login.js"></script>

</body>

</html>