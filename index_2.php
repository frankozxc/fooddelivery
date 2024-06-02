<?php
session_start();
    include "vendor/components/core.php";


    include "vendor/components/header.php";
    $products = $link->query("SELECT * FROM `basket`");
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

        <div class="shopping-cart">
            <!-- Title -->
            <div class="title">
              Корзина
            </div>
            <?php foreach($products as $key => $product): ?>
              <div class="item">
                <div class="buttons">
                  <span class="delete-btn"></span>
                  <span class="like-btn"></span>
                </div>
        
                <div class="image">
                  <img style="width:100px; height: 100px; object-fit:cover;" src="img/<?= $product['imagepath']; ?>" alt="" />
                </div>
        
                <div class="description">
                    <span><?= $product['name']; ?></span>
                    <span><?= $product['desc']; ?></span>
                </div>
                <div class="total-price">₽<?= $product['price'] ?></div>
                <a href="delete_from_cart.php?id=<?= $product['id'] ?>">Удалить из корзины</a>
              </div>
            <?php endforeach; ?>
          </div>

		<script src="code.jquery.com/jquery-1.11.3.min.js"></script>
		<link href="js/javascript.js" rel="stylesheet">
		

	<!-- <!— jquery —> -->
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</body>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>document.querySelector('.minus-btn').addEventListener('click', function() {
  if (+document.querySelector('.quantity input').value >= 1) document.querySelector('.quantity input').value = +document.querySelector('.quantity input').value -1;
  });
  document.querySelector('.plus-btn').addEventListener('click', function() {
    document.querySelector('.quantity input').value = +document.querySelector('.quantity input').value +1;
  });</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



</html>
