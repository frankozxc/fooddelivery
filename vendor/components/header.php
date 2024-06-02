<?php
	session_start();
	include 'core.php';
?>
<!DOCTYPE html>
<html lang="en">

<header>


<body>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.center').slick({
				slidesToShow: 1,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							arrows: false,
							centerMode: true,
							centerPadding: '40px',
							slidesToShow: 3
						}
					},
					{
						breakpoint: 480,
						settings: {
							arrows: false,
							centerMode: true,
							centerPadding: '40px',
							slidesToShow: 1
						}
					}
				]
			});
		});</script>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <div class="header">
        <div class="header__row">
            <div class="headerlogo"><img src="img/logo.png" style="position: relative;
					
					width: 250px;
					border-radius: 27px;"></img> <a href="index.php"></a></div>
            <a href="index.php">
                <div class="header__item headerbutton">Главная</div>
            </a>
			<a href="aboutus.php">
            <div class="header__item headerbutton">О нас </div>
			</a>
			<a href="index_2.php">
            <div class="header__item headerbutton">Корзина</div>
			</a>
			<a href="contacts.php">
            <div class="header__item headerbutton">Контанты</div></a>
			<?php
			 	if (isset($_SESSION['userdata']) && !empty($_SESSION['userdata'])) 
				{
					$fullname = $_SESSION['userdata']['fullname'];
					echo '<a href="../../profile.php" style="margin-right:10px; font-size:30px;">'. $fullname.'</a>';
					echo '<a href="../../logout.php">Выйти</a>';
				}
				else
				{
					echo '<a href="register.php" style="font-size:30px"><div class="header__item headerbutton contact">Регистрация</div></a>';
				}
			?>
        </div>
    </div>
	</div>
</header>

<body>

    <main>