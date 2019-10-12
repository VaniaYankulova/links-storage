<!-- PHP -->
<?php
	include 'conn.php';
	session_start();
					
	if(isset($_POST['log'])){
						
	$username = $_POST['username-or-email'];
	$email = $_POST['username-or-email'];
	$pass =  $_POST['pass'];
						
	$sql = "SELECT * FROM users where (BINARY username = BINARY '$username' or email = '$email') and BINARY password = BINARY '$pass'";
	$result = $conn->query($sql);
	
	if($result-> num_rows > 0){
		while($row= $result->fetch_assoc()){
			$_SESSION['userID'] = $row['userID'];	
			$_SESSION['username'] = $row['username'];	
			$_SESSION['email'] = $row['email'];	
			$_SESSION['password'] = $row['password'];	
		}
		?>

<script>
	window.location = 'zapisi.php';
</script>
<?php
	}else{ ?>
<script>
	alert("Въведените данни са грешни! Моля, опитай пак.");
</script>
<?php 

				}
				$conn->close();
				}
				?>
<!-- PHP -->


<!DOCTYPE html>
<html lang="bg">

<head>
	<!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Links Storage" />
    <meta name="keywords" content="Links, storage, archive, archiver, archive websites, websites archiver, save websites, bookmark, bookmarks, online bookmarks" />
	<meta name="description" content="Links storage" />
	<meta name="author" content="Иванка Янкулова" />
	<meta name="copyright" content="Иванка Янкулова" />
	<!--<meta name="pubdate" content="2019-07-11">-->
    <!-- META -->
    
	<title>Вход - Links Storage</title>

	<!-- BASIC DIRECTORY -->
    <base href="../" target="_self">
    <!-- BASIC DIRECTORY -->

	<!-- BOOTSTRAP AND JQUERY -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- BOOTSTRAP AND JQUERY -->

	<!-- ICONS -->
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
		integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- GOOGLE ICONS -->

	<!-- ICON -->
    <link rel="icon" href="assets/icon.png" type="image" />
	<!-- ICON -->
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/others.css">
	<!-- CSS -->
</head>

<body>
	<div class="container-fluid">

		<!-- MENU -->
		<?php include 'menu.php';?>
		<!-- MENU -->

		<!-- MAIN INFORMATION -->
		<main>

			<div class="container">

				<!-- LOGIN FORM -->
				<form id="login-form" action="php/login.php" method="POST">
					<div class="form-group">
						<label for="username-or-email">Потребителско име &#47; Имейл:</label>
						<input type="text" name="username-or-email" id="username-or-email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="pwd">Парола:</label>
						<input type="password" name="pass" id="pwd" class="form-control" required>
					</div>
					<input type="submit" class="btn btn-primary" value="Вход" name="log">

					<br>
					<br>
					<small>Все още нямаш регистрация? Регистрирай се <a href="php/registration.php">тук</a>!</small>
				</form>
				<!-- LOGIN FORM -->

			</div>

			<br>

		</main>
		<!-- MAIN INFORMATION -->

		<!-- FOOTER -->
		<?php include 'footer.php';?>
		<!-- FOOTER -->
	</div>

	<!-- JQUERY FADEIN EFFECT -->
	<!-- <script src="fadein.js"></script> -->
	<!-- JQUERY FADEIN EFFECT -->
</body>

</html>