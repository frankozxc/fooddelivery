<?php
session_start();
    include "vendor/components/core.php";


    include "vendor/components/header.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>


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
</head>

<body>
	</div>
	<div class="content">

		<div class="container pt-5">
			<img src="img/chelik.png" alt="" class="images">
			<div class="left-block">
				<h1>Мы обеспечиваем<br> доставку в течение<br> 30 минут</h1>
				<p class="subtitle">Представьте, что вам не нужна диета, потому что мы<br> предлагаем вам здоровую и
					вкусную
					пищу.</p>
				<div class="search">
					<i class="fa fa-search"></i>
					<input type="text" class="form-control" placeholder="Промокод" maxlength="10">
					<button class="btn">Использовать</button>
				</div>
			</div>




			<div class="text-center">
				<div class="text-center">
					<h2>Огромный выбор блюд на заказ! </h2>
					<p>Добро пожаловать в крупную сеть заказов и доставки еды</p>
				</div>
				<div class="wrapper">
					<div class="slider">

						<div class="slick-item">
								<img src="img/sushi.png" alt="">
								<div class="text_123">
									Суши
							</div>
						</div>
						<div class="slick-item">
								<img src="img/pizza.png" alt="">
								<div class="text_123">
									Пицца
							</div>
						</div>
						<div class="slick-item">
								<img src="img/burger.png" alt="">
								<div class="text_123">
									Бургеры
							</div>
						</div>
						<div class="slick-item">
								<img src="img/bublick.png" alt="">
								<div class="text_123">
									Десерты
							</div>
						</div>
						<div class="slick-item">
								<img src="img/salat.png" alt="">
								<div class="text_123">
									Салаты
							</div>
						</div>
						<div class="slick-item">
								<img src="img/pasta.png" alt="">
								<div class="text_123">
									Паста
							</div>
						</div>
					</div>


					<!-- Подключаем JQuery -->
					<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
					<!-- Подключаем Slik -->
					<script src="js/slick.min.js"></script>
					<!-- Подключаем файл скриптов -->
					<script src="js/script.js"></script>
				</div>
				<img src="img/arrows+eda.png" style="width: 90%">



				<h2> Популярные блюда в доставке </h2>
				<p>Самые вкусные и полезные блюда от наших шефов. <br>
					Вы можете заказать это блюдо отдельно или как часть плана питания.</p>

				<button class="btn"
					style="background-image: url('img/salat_kura.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%) !important;">
					<p>Cалат из курицы</p>
				</button>
				<button class="btn"
					style="background-image: url('img/cezar.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
					<p>Cалат цезарь</p>
				</button>
				<button class="btn"
					style="background-image: url('img/grecheskii.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
					<p>Греческий салат</p>
				</button>
				<button class="btn"
					style="background-image: url('img/semga.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
					<p>Семга с рисом на пару</p>
				</button>
				<button class="btn"
					style="background-image: url('img/ovoshi.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
					<p>Куриная грудка с овощами</p>
				</button>
				<button class="btn"
					style="background-image: url('img/sup.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
					<p>Суп из лука-порея</p>
				</button>
				<a href="catalog.php">
					<div class="header__item btn" style="height: 100%; background: #5B9DFF; color: white	;">Показать все меню</div>
				</a>
			</div>
			<div class="text-center">
			
				</div>
				<div class="container text-center">
					<div class="row mt-5">
					  <div class="col">
						<img src="img/chef.png" style="width: 70%;">
					  </div>
					  <div class="col">
						<p style="float: right"><h3>Вкусная и полезная еда<br> для вашего тела</h3>Наша компания занимается доставкой здоровой и вкусной<br>
							еды по городу. Специальные технологии приготовления<br>
							и доставки позволяют покупать свежие и полезные продукты.</p>
								
				<div class="row vkus">
					<div class="col"><img src="img/arr-right.svg">Заказать консультацию диетолога</div>
					<div class="col"><img src="img/arr-up.svg">Заказать здоровую еду<br>экспресс-доставкой</div>
					<div class="w-100 py-5"></div>
					<div class="col"><img src="img/arr-right.svg">Тарифные планы на постоянной основе</div>
					<div class="col"><img src="img/arr-up.svg">Предложения для особых клиентов</div>
					<div class="w-100 py-5"></div>
					<div class="col"><button class="btn" style="background: #5B9DFF;">Выбрать диету</button></div>
					<div class="col"><button class="btn" style="background: #FFFFFF;">Что нового?</button></div>
				</div>
					  </div>

					</div>
				  </div>
				  <div class="intro"
				  style="background: url(img/rassilka.png) no-repeat; background-size: cover; width: 100%; height: 600px; background-position: center;">
				  <div class="row text-center" style="padding-top: 10%">
					<div class="col">
						<h3>Подпишитесь на нашу
							рассылку</h3>

							<p>Просмотрите местные рестораны и предприятия 
								для доставки, введя свой адрес.
								</p>
								<div class="search">
									<i class="fa fa-search"></i>
									<input type="text" class="form-control" placeholder="Введите адрес своей почты" maxlength="10">
									<button class="btn">Узнать</button>
								</div>
					</div>
					<div class="col">
						<h3>Готов
							заказать?</h3>
					<div class="w-100 py-5"></div>
					<div class="col">

					</div>
					<div class="col"><button class="btn">Заказать</button>
					</div>
				</div>
			</div>
				  </div>
				  <footer class="footer">
					<div class="container">
					  <div class="row">
						<div class="col">О КОМПАНИИ</div>
						<div class="col">КОНТАКТЫ</div>
						<div class="col">ЧАСТЫЕ ВОПРОСЫ</div>
						<div class="col">УСЛОВИЯ ДОСТАВКИ И ВОЗВРАТА</div>
					  </div>
					</div>
				  </footer>
				
			
			<div class="footer__img social">
					<div class="footer-left">
						<img src="img/minilogo.png">
						<img src="img/telegram.png">
						<img src="img/icon_vk_.png">
					</div>
					<div class="footer-right">
						<img src="img/google.png">
						<img src="img/appstore.png">
					</div>
				</div>
			
		
	<!-- <!— slick —> -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<!-- <!— jquery —> -->
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</body>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



</html>