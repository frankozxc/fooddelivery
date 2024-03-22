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
            <div class="header__item headerbutton">Корзина</div>
            <div class="header__item headerbutton">Контанты</div>
			<?php
				if(isset($_SESSION['user'])){
					var_dump($_SESSION['user']);
			?>

			<a href="vendor/components/outProfil.php">
            <div class="header__item headerbutton contact">Выход</div>
			</a>
			<?php
				}else{
			?>

			<a href="register.php">
            <div class="header__item headerbutton contact">Вход и регистрация</div>
			</a>
			<?php
				}
			?>
        </div>
    </div>
	</div>
</header>

<body>

    <main>