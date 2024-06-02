<?php
session_start();
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
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="salat_kura.png">
                        <input type="hidden" name="order" value="Cалат из курицы">
                        <input type="hidden" name="desc" value="Салат вообще с кайфом">
                        <input type="hidden" name="price" value="200">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/cezar.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Cалат цезарь</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="cezar.png">
                        <input type="hidden" name="order" value="Cалат цезарь">
                        <input type="hidden" name="desc" value="Любимый всеми">
                        <input type="hidden" name="price" value="400">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/grecheskii.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Греческий салат</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="grecheskii.png">
                        <input type="hidden" name="order" value="Греческий салат">
                        <input type="hidden" name="desc" value="Вообще сигма">
                        <input type="hidden" name="price" value="100">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/semga.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Семга с рисом на пару</p>
                    <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="imagepath" value="semga.png">
                        <input type="hidden" name="order" value="Семга с рисом на пару">
                        <input type="hidden" name="desc" value="Рыба не моё">
                        <input type="hidden" name="price" value="312">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/ovoshi.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Курица с овощами</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="ovoshi.png">
                        <input type="hidden" name="order" value="Курица с овощами">
                        <input type="hidden" name="desc" value="Кайф">
                        <input type="hidden" name="price" value="234">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/sup.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Суп из лука-порея</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="sup.png">
                        <input type="hidden" name="order" value="Суп из лука-порея">
                        <input type="hidden" name="desc" value="Просто вода с луком">
                        <input type="hidden" name="price" value="345">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/borsh.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Борщ</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="borsh.png">
                        <input type="hidden" name="order" value="Борщ">
                        <input type="hidden" name="desc" value="Имба">
                        <input type="hidden" name="price" value="456">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                style="background-image: url('img/falafel.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                <p style="margin-top: 140% !important;">Фалафель из курицы</p>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="imagepath" value="falafel.png">
                    <input type="hidden" name="order" value="Фалафель из курицы">
                    <input type="hidden" name="desc" value="Фалафель?">
                    <input type="hidden" name="price" value="756">
                <button class="btn slider-btn">Заказать</button>
            </form>
            </div>
            <div class="slick-item btn"
            style="background-image: url('img/lapsha.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
            <p style="margin-top: 140% !important;">Удон с креветками</p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="imagepath" value="lapsha.png">
                <input type="hidden" name="order" value="Удон с креветками">
                <input type="hidden" name="desc" value="Вкусняшка">
                <input type="hidden" name="price" value="700">
                <button class="btn slider-btn">Заказать</button>
            </form>
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
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="filadefolt.png">
                        <input type="hidden" name="order" value="Филадельфия">
                        <input type="hidden" name="desc" value="Бомба суши">
                        <input type="hidden" name="price" value="500">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/filalite.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Филадельфия лайт</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="filalite.png">
                        <input type="hidden" name="order" value="Филадельфия лайт">
                        <input type="hidden" name="desc" value="Бомба суши">
                        <input type="hidden" name="price" value="200">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/california2.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Калифорния</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="california2.png">
                        <input type="hidden" name="order" value="Калифорния">
                        <input type="hidden" name="desc" value="Бомба суши">
                        <input type="hidden" name="price" value="340">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/gimbap.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Гимбап</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="gimbap.png">
                        <input type="hidden" name="order" value="Гимбап">
                        <input type="hidden" name="desc" value="Бомба суши">
                        <input type="hidden" name="price" value="450">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/maki.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Маки</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="maki.png">
                        <input type="hidden" name="order" value="Маки">
                        <input type="hidden" name="desc" value="Бомба суши">
                        <input type="hidden" name="price" value="700">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/makizusi.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Макизуси</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="makizusi.png">
                        <input type="hidden" name="order" value="Макизуси">
                        <input type="hidden" name="desc" value="Бомба суши">
                        <input type="hidden" name="price" value="320">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="slider">

                <div class="slick-item btn"
                    style="background-image: url('img/california.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%) !important;">
                    <p style="margin-top: 140% !important;">Пицца Калифорния</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="california.png">
                        <input type="hidden" name="order" value="Пицца Калифорния">
                        <input type="hidden" name="desc" value="Классная пицца">
                        <input type="hidden" name="price" value="799">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/margarita.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Пицца Маргарита</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="margarita.png">
                        <input type="hidden" name="order" value="Пицца Маргарита">
                        <input type="hidden" name="desc" value="Классная пицца">
                        <input type="hidden" name="price" value="413">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/mozarella.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Пицца Моцарелла</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="mozarella.png">
                        <input type="hidden" name="order" value="Пицца Моцарелла">
                        <input type="hidden" name="desc" value="Классная пицца">
                        <input type="hidden" name="price" value="352">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/piperonni.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Пицца Пипперони</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="piperonni.png">
                        <input type="hidden" name="order" value="Пицца Пипперони">
                        <input type="hidden" name="desc" value="Классная пицца">
                        <input type="hidden" name="price" value="550">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/pochigakski.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Пицца по чигайски</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="pochigakski.png">
                        <input type="hidden" name="order" value="Пицца по чигайски">
                        <input type="hidden" name="desc" value="Классная пицца">
                        <input type="hidden" name="price" value="400">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
                </div>
                <div class="slick-item btn"
                    style="background-image: url('img/hattandurikura.png'),linear-gradient(180deg, #ADCEFF -97.67%, rgba(173, 206, 255, 0) 100%);">
                    <p style="margin-top: 140% !important;">Пицца с курицей</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="imagepath" value="hattandurikura.png">
                        <input type="hidden" name="order" value="Пицца с курицей">
                        <input type="hidden" name="desc" value="Классная пицца">
                        <input type="hidden" name="price" value="300">
                        <button class="btn slider-btn">Заказать</button>
                    </form>
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
<script>
    document.querySelector('.add-to-cart').addEventListener('click', function() {
        var productId = this.getAttribute('data-id');
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'add_to_cart.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send('product_id=' + productId);
    });
</script>
</body>