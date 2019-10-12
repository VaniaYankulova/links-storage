<?php
error_reporting(0);
ini_set('display_errors', 0);

	include 'conn.php';
	session_start();

	if(isset($_SESSION['userID'])){
		// header('location:index.php');
?>
    <!-- IF USER IS LOGGED HIDE LOGIN AND REG BUTTONS AND SHOW LOGOUT ZAPISI AND SEARCH BUTTONS -->
    <script>
        $(document).ready(function () {
            $("#login-reg-menu-div").hide();
            $("#logout-div").show();
            $(".zapisi").show();
            $("#search-div").show();
            $("#nav-div").show();
        });
    </script>
    <!-- IF USER IS LOGGED HIDE LOGIN AND REG BUTTONS AND SHOW LOGOUT ZAPISI AND SEARCH BUTTONS -->

<?php
    }else {
?>
<!-- IF USER IS NOT LOGGED HIDE LOGOUT ZAPISI AND SEARCH BUTTONS -->
<script>
        $(document).ready(function () {
            $("#login-reg-menu-div").show();
            $("#logout-div").hide();
            $(".zapisi").hide();
            $("#search-div").hide();
            $("#nav-div").show();
        });
    </script>
    <?php } ?>
<!-- IF USER IS NOT LOGGED HIDE LOGOUT ZAPISI AND SEARCH BUTTONS -->

<!-- MENU -->
<div id="nav-div">
<nav class="navbar navbar-expand-sm sticky-top">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php"><img id="logo-img" src="assets/logo.png" alt="Logo"></a>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Начало</a>
        </li>
        <li class="nav-item zapisi">
            <a class="nav-link" href="php/zapisi.php">Записи</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="php/about-us.php" class="nowrap-words">За&nbsp;нас</a>
        </li>
        <div id="search-div">
            <li class="nav-item">
                <form id="search-form" action="php/search.php" method="get" ecntype="multipart/data-form">
                    <input type="text" name="query" id="search-input" class="form-control" placeholder="Търси...">

                    <button type="submit" class="btn btn-primary" value="Търси" name="search" id="search-button"><i
                            class="fa fa-search"></i></button>


                </form>
            </li>
        </div>

        <div id="login-reg-menu-div">
            <li class="nav-item">
                <a class="nav-link btn btn-success " href="php/login.php"><i class="fa fa-lock"></i> Вход</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-secondary " href="php/registration.php"><i class="fas fa-key"></i>
                    Регистрация</a>
            </li>
        </div>
        <div id="logout-div">
            <li class="nav-item">
                <a class="nav-link btn btn-secondary " href="php/logout.php"><i class="fas fa-key"></i> Изход</a>
            </li>
        </div>
    </ul>
</nav>
</div>
<!-- MENU -->





<script>
    if ($(window).width() < 880) {
            $('nav').removeClass('sticky-top');
            
        }
        if ($(window).width() > 880) {
            $('nav').addClass('sticky-top');
            
        }
    $( window ).resize(function() {
 
        if ($(window).width() < 880) {
            $('nav').removeClass('sticky-top');
            
        }
        if ($(window).width() > 880) {
            $('nav').addClass('sticky-top');
            
        }
        

});



</script>