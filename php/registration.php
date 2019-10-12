
<?php
	include 'conn.php';

	if(isset($_SESSION['userID'])){

		// header('location:index.php');
	}


	else if (isset($_POST['register']))
{
	$firstName = $_POST['first-name'];
	$lastName = $_POST['last-name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['pass'];


		$sql_u = "SELECT * FROM users WHERE username='$user'";
		$res_u = mysqli_query($conn, $sql_u);
  
		if (mysqli_num_rows($res_u) > 0) {
		  ?>
		  <script>alert("Това потребителско име е заето! Моля, опитайте с друго.");</script>
		  <?php 	
		}else{
			$phash = sha1(sha1($pass."salt")."salt");

			$sql = "INSERT INTO users (userID, firstName, lastName, email, username, password) VALUES ('', '$firstName', '$lastName', '$email', '$user', '$pass')";
			

			?>
			<!-- <script>alert('Поздравления, Вие се регистрирахте успешно!');</script>
			<?php
			$result = mysqli_query($conn, $sql);
			?>
			
			<script>
			window.location = 'login.php';
			</script> -->
			
			<?php
		}}
		?>




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
    
	<title>Регистрация - Links Storage</title>

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

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- <script src="https://www.google.com/reCAPTCHA/api.js" async defer></script> -->

<!-- 	
	<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LfCuq4UAAAAAOwiI_j_BqbNdxhQl441IZYNRPnF'
        });
      };
		</script> -->
		

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

				<!-- REGISTRATION FORM -->
				
				<form id="registration-form" action="php/registration.php" method="POST">
				<div id="html_element"></div>
					<div class="form-group">
						<label for="first-name">Собствено име:</label>
						<input type="text" name="first-name" id="first-name" class="form-control" maxlength="50">
					</div>
					<div class="form-group">
						<label for="last-name">Фамилия:</label>
						<input type="text" name="last-name" id="last-name" class="form-control" maxlength="50">
					</div>
					<div class="form-group">
						<label for="email">Имейл:</label>
						<input type="email" name="email" id="email" class="form-control" maxlength="50">
					</div>
					<div class="form-group">
						<label for="username">&#42; Потребителско име:</label>
						<input type="text" name="username" id="username" class="form-control" pattern=".{4,50}" title="Моля, въведете от 4 до 50 символа." required>
					</div>
					<div class="form-group">
						<label for="pwd">&#42; Парола:</label>
						<input type="password" name="pass" id="pwd" class="form-control" pattern=".{4,50}" title="Моля, въведете от 4 до 50 символа." required>
					</div>
					<!-- <div class="g-reCAPTCHA" data-sitekey="6LfCuq4UAAAAAOwiI_j_BqbNdxhQl441IZYNRPnF"></div> -->
					<div class="g-recaptcha" data-sitekey="6LfCuq4UAAAAAOwiI_j_BqbNdxhQl441IZYNRPnF"></div>
					<br>
					<input type="submit" name="register" value="Регистрация" class="btn btn-primary">
					<br>
					<small>Регистрирайки се тук, Вие се съласявате с <a href="terms-and-conditions.php" target="_blank">Общите условия за ползване</a> и <a href="privacy-policy.php" target="_blank">Политиката за поверителност</a> на този сайт.</small>
					<br>
					<small>Всички полета, които са отнелязани със &#42; са задължителни!</small>
				</form>
				<!-- REGISTRATION FORM -->
				
	
			</div>

			<br>

		</main>
		<!-- MAIN INFORMATION -->

		<!-- FOOTER -->
		<?php include 'footer.php';?>
		<!-- FOOTER -->
	</div>

	<!-- JQUERY FADEIN EFFECT -->
	<script src="fadein.js"></script>
	<!-- JQUERY FADEIN EFFECT -->





</body>

</html>