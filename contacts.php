<?php
include "vendor/components/header.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Food Delivery</title>
</head>
<body>
    <div class="container">
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="font-size:40px;">Контактная информация</th>
                </tr>
                <tr>
                    <th>Адрес</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>644073, Омская область, г. Омск, ул.  Фрунзе, 1, корп. 4 (этаж 6)</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Телефоны</th>
                    <th>Электронная почта</th>
                    <th>Социальные сети</th>
                </tr>
            </thead>
            <tbody>
                <td>+7 923 678-08-05</td>
                <td><a href="#">vitux@mail.ru</a></td>
                <td>-</td>
            </tbody>
            <tbody>
                <td>+7 381 250-93-61</td>
                <td><a href="#">info@gisgkx.ru</a></td>
                <td></td>
            </tbody>
            <tbody>
                <td>+7 800 550-39-96</td>
                <td><a href="#">vitux@mail.ru</a></td>
                <td></td>
            </tbody>
            <tbody>
                <td>+7 381 237-85-95</td>
                <td><a href="#">head@gisgkx.ru</a></td>
                <td></td>
            </tbody>
            <tbody>
                <td></td>
                <th>Веб-сайт</th>
                <td></td>
            </tbody>
            <tbody>
                <td></td>
                <td><a href="#">gisgkx.ru</a></td>
                <td></td>
            </tbody>
        </table>
        <iframe style="width: 100%; height: 300px;" class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A4665c1c5044962017872daded575d06430c2999659c692e86415b84e955227f0&amp;source=constructor" frameborder="0"></iframe>
    </div>
    <?php include "vendor/components/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>