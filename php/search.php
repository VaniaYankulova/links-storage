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
    
	<title>Търсене - Links Storage</title>

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

				<!-- RESULT FROM THE SEARCH -->
				<?php echo '<h1> Резултати за "' . $_GET['query'] . '":</h1>' ?>
				<br>
				<br>
				<br>
				<div class="table-responsive">
					<table class="table table-hover links-description-table">
						<thead class="thead-light">
							<tr>
								<th>Линк</th>
								<th>Описание</th>
							</tr>
						</thead>
						<tbody>
							
							<!-- PHP -->
							<?php
							if(isset($_GET['search'])){
								$query = $_GET['query'];

								$sql = "select * from users where  username = '" . $_SESSION['username'] . "' AND link IS NOT NULL and (link like '%$query%' or description like '%$query%')";

								$result = $conn->query($sql);
								if($result->num_rows > 0){
									while($row1 = $result->fetch_array()){
										$link = $row1['link'];
										$description = $row1['description'];
				
								?>
									<tr>
										<td>
											<a href="<?php echo $link;?>" target="_blank">
												<?php echo $link;?>
											</a>
										</td>
										<td><?php echo $description;?></td>
									</tr>
									<?php
							
									}

									}else{
										echo "<p class='no-records'>Нямате запис с такова съдържание!</p>";?>
									<script>
										$(".links-description-table").hide();
										</script>
									<?php
									}
							}
							$conn->close();
							?>
							<!-- PHP -->
						</tbody>
					</table>

					<br>
				<!-- RESULT FROM THE SEARCH -->

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