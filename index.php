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
    
    <title>Links Storage</title>

    <!-- BASIC DIRECTORY -->
    <base href="links-storage" target="_self">
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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/others.css">
    <link rel="stylesheet" href="css/fadein.css">
    <!-- CSS -->
</head>

<body>
    <div class="container-fluid">

        <!-- MENU -->
        <?php include 'php/menu.php';?>
        <!-- MENU -->

        <!-- MAIN INFORMATION -->
        <main>
            <!-- SLIDESHOW -->
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/logo-img.png" alt="Изображение на логото">
                        <div class="carousel-caption content">
                            <h3>Търсиш удобно място за съхранение на линкове?</h3>
                            <p>Ние можем да ти го осигурим!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/no-time.png" alt="Изображение на компютърни устройства">
                        <div class="carousel-caption content">
                            <h3>Намери нещо интересно, но нямаш време да го разгледаш?</h3>
                            <p>Запиши тук линковете, които те интересуват и ги разгледай по-късно!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/connection.jpg" alt="Изображение на компютърни устройства">
                        <div class="carousel-caption content">
                            <h3>Достъп по всяко време</h3>
                            <p>Получаваш постоянен достъп до записите си от всяко устройство, без значение къде се
                                намираш.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <!-- SLIDESHOW -->

            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <!-- ICONS WITH DESCRIPTION -->
            <div class="gray-line"></div>
            <div class="lightgray-line">
                <br>
                <br>
                <br>
                <p id="lightgray-line-short-text" class="fadein-top">Мястото, от което се нуждаеш, за да съхраняваш
                    интересните за теб
                    неща, намерени в Интернет</p>

                <div class="row icons-row">
                    <div class="col-md-6 fadein-left-slowly">
                        <div class="icons">
                            <i class='fas fa-laptop'></i>
                            <!-- <i class="fas fa-magic"></i> -->
                        </div>
                        <p><i class='fas fa-check'></i> достъп от различни устройства</p>
                    </div>
                    <div class="col-md-6 fadein-left-quickly">
                        <div class="icons">
                            <i class='far fa-clock'></i>
                        </div>
                        <p><i class='fas fa-check'></i> постоянен достъп</p>
                    </div>
                    <!-- <div class="col-md-4">
                    <div class="icons">
                        <i class="fa fa-male"></i>
                    </div>
                    <p><i class='fas fa-check'></i> обслужване според индивидуланите нужди</p>
                </div> -->
                </div>

                <div class="row icons-row">
                    <div class="col-md-6 fadein-left-slowly">
                        <div class="icons">
                            <i class='fas fa-thumbs-up'></i>
                        </div>
                        <p><i class='fas fa-check'></i> неограничен брой записи</p>
                    </div>
                    <div class="col-md-6 fadein-left-quickly">
                        <div class="icons">
                            <i class='far fa-smile'></i>
                        </div>
                        <p><i class='fas fa-check'></i> доволни потребители</p>
                    </div>
                    <!-- <div class="col-md-4">
                    <div class="icons">
                        <i class="fa fa-dollar"></i>
                        <i class="fa fa-money"></i>
                        <i class='fas fa-money-check-alt'></i>
                    </div>
                    <p><i class='fas fa-check'></i> разумна цена</p>
                </div> -->
                </div>

                <br>
                <br>
            </div>

            <div class="gray-line"></div>
            <!-- ICONS WITH DESCRIPTION -->

            <!-- BACKGROUND VIDEO ON HOMEPAGE -->
            <video autoplay muted loop id="background-video">
                <source src="assets/background-video.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <!-- BACKGROUND VIDEO ON HOMEPAGE -->

            <div class="container">

                <br>
                <br>

                <!-- SHORT TEXT -->
                <div class="fadein-top">
                    <div class="blue-line"></div>
                    <div id="short-text" class="jumbotron">
                        Намерил си нещо интересно в Интернет, но нямаш време да го разгледаш на момента? Или може би
                        това,
                        което
                        разглеждаш ще ти е необходимо в бъдеще и искаш да го запазиш някъде? Запази това, което ти
                        трябва
                        при нас и
                        ние ще го съхраним специално за теб, а когато вече не ти трябва, можеш да го изтриеш!
                    </div>
                    <div class="blue-line"></div>
                </div>
                <!-- SHORT TEXT -->

                <br>
            </div>

            <br>
            <br>

            <!-- WHY PEOPLE LIKE US? - AVATARS AND COMMENTS -->
            <div id="avatars-and-comments" class="container">
                <h1 class="fadein-left-quickly">Защо хората ни харесват?</h1>
                <div class="row">
                    <div class="avatar col-sm-4 fadein-left-slowly">
                        <img src="assets/avatar1.png" alt="Аватар">
                    </div>
                    <div class="jumbotron col-sm-8 fadein-left-quickly">
                        „Висчките ни потребители са доволни от нас, затова се връщат отново и отново!“
                    </div>
                </div>
                <div class="row">
                    <div class="avatar col-sm-4 fadein-left-slowly">
                        <img src="assets/avatar3.png" alt="Аватар">
                    </div>
                    <div class="jumbotron col-sm-8 fadein-left-quickly">
                        „Изключително бърза регистрация и лесно създаване на записи!“
                    </div>
                </div>
                <div class="row">
                    <div class="avatar col-sm-4 fadein-left-slowly">
                        <img src="assets/avatar2.png" alt="Аватар">
                    </div>
                    <div class="jumbotron col-sm-8 fadein-left-quickly">
                        „Лесен достъп до всички записи по всяко време.“
                    </div>
                </div>
            </div>
            <!-- WHY PEOPLE LIKE US? - AVATARS AND COMMENTS -->

        </main>
        <!-- MAIN INFORMATION -->

        <!-- FOOTER -->
        <?php include 'php/footer.php';?>
        <!-- FOOTER -->
    </div>

    <!-- JQUERY FADEIN EFFECT -->
    <script src="js/fadein.js"></script>
    <!-- JQUERY FADEIN EFFECT -->
</body>

</html>