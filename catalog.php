<?php
    include "vendor/components/core.php";


    include "vendor/components/header.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 style="letter-spacing: 0.2em; padding-top: 150px; padding-bottom: 20px;">Меню</h3>
                Представьте, что вам не нужна диета, потому что мы<br>предлагаем вам здоровую и вкусную пищу.
            </div>
            <div class="col"><img src="img/chef.png" style="width: 50%;"></div>

        </div>
        <div class="text-center mt-5">
            <h2>Огромный выбор вкусных и полезных<br>блюд на заказ.</h2>
            <p>Популярные блюда в доставке.</p>
        </div>
        <div class="wrapper">
            <div class="slider">

                <div class="slick-item btn"
                    style="background-image: url('img/salat_kura.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%) !important;">
                    <p style="margin-top: 140% !important;">Cалат из курицы</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/cezar.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Cалат цезарь</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/grecheskii.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Греческий салат</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/semga.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Семга с рисом на пару</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/ovoshi.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Курица с овощами</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/sup.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Суп из лука-порея</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/borsh.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Борщ</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                style="background-image: url('img/falafel.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                <p style="margin-top: 140% !important;">Фалафель из курицы</p>
                <button class="btn slider-btn">Заказать</button>
            </div>
            <div class="slick-item btn"
            style="background-image: url('img/lapsha.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
            <p style="margin-top: 140% !important;">Удон с креветками</p>
            <button class="btn slider-btn">Заказать</button>
        </div>
                <!-- Подключаем JQuery -->
                <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
                <!-- Подключаем Slik -->
                <script src="js/slick.min.js"></script>
                <!-- Подключаем файл скриптов -->
                <script src="js/script.js"></script>
            </div>
        </div>

        <div class="wrapper">
            <div class="slider">

                <div class="slick-item btn"
                    style="background-image: url('img/filadefolt.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%) !important;">
                    <p style="margin-top: 140% !important;">Филадельфия</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/filalite.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Филадельфия лайт</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/california2.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Калифорния</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/gimbap.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Гимбап</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/maki.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Маки</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/makizusi.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Макизуси</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="slider">

                <div class="slick-item btn"
                    style="background-image: url('img/california.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%) !important;">
                    <p style="margin-top: 140% !important;">Пицца Калифорния</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/margarita.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Пицца Маргарита</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/mozarella.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Пицца Моцарелла</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/piperonni.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Пицца Пипперони</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/pochigakski.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Пицца по чигайски</p>
                    <button class="btn slider-btn">Заказать</button>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/hattandurikura.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Пицца с курицей</p>
                    <button class="btn slider-btn">Заказать</button>
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
  
    </div>
</body>