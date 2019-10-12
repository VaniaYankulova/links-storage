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
	
	<title>Записи - Links Storage</title>

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
	<!-- <link rel="stylesheet" href="fadein.css"> -->
	<!-- CSS -->
</head>

<body>
	
	<div class="container-fluid">

		<!-- MENU -->
		<?php include 'menu.php';?>
		<!-- MENU -->

		<!-- MAIN INFORMATION -->
		<main>
			<!-- TOP IMAGE -->
			<div class="top-page-image">
				<img src="assets/websites.jpg" alt="Изображение">
			</div>
			<div class="gray-line"></div>
			<!-- TOP IMAGE -->

			<br>

			<div class="container">


				<br>
				<h3>Здравей, <?php echo $_SESSION['username']; ?></h3>
				<br>

				<!-- ADD NEW LINKS -->
				<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#add-new-link">Нов запис</button>
				<!-- PHP -->
				<?php
				include 'conn.php';
				// include 'session.php';

				if(isset($_POST['add'])){
					$username = $_SESSION['username'];
					$password =  $_SESSION['password'];

					$link = $_POST['link'];
					$description = $_POST['description'];

					$insert = "insert into users (username,password,link,description) values ('$username','$password','$link','$description');";
					
					if($conn->query($insert)== TRUE){

							// echo "Sucessfully add data";
							header('location:zapisi.php');
					}else{

						echo "Ooppss cannot add data" . $conn->connect_error;
						header('location:zapisi.php');
					}
				}
				?>
				<!-- PHP -->

				<div id="add-new-link" class="collapse">
					<!-- FORM FOR SAVING NEW LINKS -->
					<form id="save-form" action="php/zapisi.php" method="POST">
						<div class="form-group">
							<label for="link">Линк:</label>
							<input type="url" name="link" id="link" class="form-control" placeholder="http://website.com" required>
						</div>
						<div class="form-group">
							<label for="description">Описание:</label>
							<textarea name="description" id="description" class="form-control" placeholder="Текст..."></textarea>
						</div>
						<input type="submit" name="add" class="btn btn-success" value="Запиши">
					</form>
					<!-- FORM FOR SAVING NEW LINKS -->
				</div>				
				<!-- ADD NEW LINKS -->
				
				<br>
				<br>
				<br>

				<h1 id="zapisi-heading">Записи</h1>
				<br>

				<!-- TABLE WITH LINKS AND DESCRIPTIONS -->
				<div class="table-responsive">
					<table class="table table-hover links-description-table">
						<thead class="thead-light">
							<tr>
								<th>Линк</th>
								<th>Описание</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							<?php
					// $sql = "SELECT * FROM users";
					$sql = "SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "' AND link IS NOT NULL";
					$result = $conn->query($sql);
					if($result->num_rows > 0){
						while($row = $result->fetch_array()){
						?>
					<tr>
						<td>
							<a href="<?php echo $row['link'];?>" target="_blank">
								<?php echo $row['link'];?>
							</a>
						</td>
						<td>
							<?php echo $row['description'];?>
						</td>
						<td>
							<a class="btn btn-primary btn-sm" href="php/edit.php?userID=<?php echo md5($row['userID']);?>">Редактирай</a>
							<a class="btn btn-danger btn-sm" href="php/delete.php?userID=<?php echo md5($row['userID']);?>">Изтрий</a>
						</td>
					</tr>
					<?php
							}	
						}else{
							echo "<p class='no-records'>Все още нямате записи!</p>";?>
							<script>
								$("#zapisi-heading").hide();
								$(".links-description-table").hide();
								</script>
							<?php
						}
						
						$conn->close();
						?>
				</tbody>
			</table>
		</div>
		<!-- TABLE WITH LINKS AND DESCRIPTIONS -->

		

				<br>
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