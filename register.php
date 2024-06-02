<?php
session_start();
include "vendor/components/core.php";

function redirectTo($location, $msg = '') {
    $_SESSION['message'] = $msg;
    header('Location: ' . $location);
    exit();
}

if (isset($_POST["submit"])) {
    // Обработка регистрации пользователя
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $password_r = $_POST['confirmpassword'];
    $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);

    // Проверка наличия обязательных полей
    if (empty($email) || empty($password) || empty($fullname)) {
        redirectTo('register.php', 'Все поля должны быть заполнены.');
    }

    // Проверка совпадения паролей
    if ($password_r !== $password) {
        redirectTo('register.php', 'Пароли должны совпадать.');
    }

    // Хеширование пароля
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Вставка данных в базу данных
    $stmt = $link->prepare("INSERT INTO `users` (`email`, `password`, `fullname`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $passwordHash, $fullname);
    if ($stmt->execute()) {
        $_SESSION["userdata"] = [
            "email" => $email,
            "fullname" => $fullname,
        ];
        header("Location: index.php");
    } else {
        redirectTo('register.php', 'Ошибка регистрации. Этот пользователь уже существует!');
    }
}

if (isset($_POST["submitLogin"])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $stmt = $link->prepare("SELECT `id`, `password`, `fullname` FROM `users` WHERE `email` = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION["userdata"] = [
                "userid" => $user['id'],
                "fullname" => $user['fullname'],
            ];
            header("Location: index.php");
        } else {
            redirectTo('register.php', 'Неверный логин или пароль!');
        }
    } else {
        redirectTo('register.php', 'Пользователь с таким email не найден.');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Регистрация/Авторизация</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style1.css">
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="frame">
    <div class="nav">
      <ul class="links">
        <li class="signin-active"><a class="btn">Войти</a></li>
        <li class="signup-inactive"><a class="btn">Зарегистироваться </a></li>
      </ul>
    </div>
    <div ng-app ng-init="checked = false">
				        <form class="form-signin" action="" method="post" name="form">
          <label for="fullname">Имя пользователя</label>
          <input class="form-styling" type="text" name="fullname" placeholder=""/>
          <label for="password">Пароль</label>
          <input class="form-styling" type="password" name="password" placeholder=""/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Запомнить аккаунт</label>
          <div class="btn-animate">
            <a class="btn-signin">Войти</a>
          </div>
				        </form>
        
				        <form class="form-signup" action="" method="post" name="form">
          <label for="fullname">Полное имя</label>
          <input class="form-styling" type="text" name="fullname" placeholder=""/>
          <label for="email">Почта</label>
          <input class="form-styling" type="text" name="email" placeholder=""/>
          <label for="password">Пароль</label>
          <input class="form-styling" type="password" name="password" placeholder=""/>
          <label for="confirmpassword">Повторите пароль</label>
          <input class="form-styling" type="password" name="confirmpassword" placeholder=""/>
          <button name="submit" ng-click="checked = !checked" class="btn-signup">Зарегистрироваться</button>
				        </form>
      
            <div  class="success">
              <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                 <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
                  c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
                  c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" /></svg>
                <div class="successtext">
                   <p> Спасибо за регистрацию! Проверьте вашу электронную почту для ее подтверждения.</p>
                </div>
             </div>
      </div>
      
      <div class="forgot">
        <a href="#">Забыли пароль?</a>
      </div>
      
      <div>
        <div class="cover-photo"></div>
        <div class="profile-photo"></div>
        <h1 class="welcome">Добро пожаловать <?php  ?></h1>
        <a class="btn-goback" value="Refresh" onClick="history.go()">Назад</a>
        <a class="btn-goback" value="" onClick=" ./index.php">Перейти на сайт</a>
      </div>
  </div>
    
  <a id="refresh" value="Refresh" onClick="history.go()">
    <svg class="refreshicon"   version="1.1" id="Capa_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;"
         xml:space="preserve">
         <path  d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224
                c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5
                c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5
                c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025
                c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614
                l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z"/>
    </svg>
  </a>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
