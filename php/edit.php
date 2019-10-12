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
    
	<title>Редактиране - Links Storage</title>

	<!-- BASIC DIRECTORY -->
    <base href="../" target="_self">
    <!-- BASIC DIRECTORY -->

	<!-- BOOTSTRAP AND JQUERY -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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


		<!-- PHP -->
		<?php
		include 'conn.php';
		include 'session.php';

		$id = $_GET['userID'];
		$view = "SELECT * from users where md5(userID) = '$id'";
		$result = $conn->query($view);
		$row = $result->fetch_assoc();

		if(isset($_POST['update'])){

			$ID = $_GET['userID'];

			$link = $_POST['link'];
			$description = $_POST['description'];

			$insert = "UPDATE users set link = '$link', description = '$description' where md5(userID) = '$ID'";
			
			if($conn->query($insert)== TRUE){

					// echo "Sucessfully update data";
					header('location:zapisi.php');	
							?>
							<script>
	window.location = 'php/zapisi.php';
</script>
<?php
			}else{

				echo "Ooppss cannot add data" . $conn->error;
				header('location:zapisi.php');
			}
			$conn->close();
		}
		?>
		<!-- PHP -->
		


		<!-- EDIT FORM -->
		<form id="edit-form" action="" method="POST">
			<div class="form-group">
				<label for="link">Линк:</label>
				<input type="text" name="link" id="link" class="form-control" value="<?php echo $row['link'];?>"
					placeholder="http://www.website.com" required>
			</div>
			<br>
			<div class="form-group">
				<label for="description">Описание:</label>
				<textarea type="text" name="description" id="description" class="form-control"
					placeholder="Текст.."><?php echo $row['description'];?></textarea>
			</div>

			<input id="save-changes" type="submit" class="btn btn-success" name="update" value="Запиши">
		</form>
		<!-- EDIT FORM -->


		<!-- FOOTER -->
		<?php include 'footer.php';?>
		<!-- FOOTER -->
	</div>

	<!-- JQUERY FADEIN EFFECT -->
	<!-- <script src="fadein.js"></script> -->
	<!-- JQUERY FADEIN EFFECT -->
</body>

</html>