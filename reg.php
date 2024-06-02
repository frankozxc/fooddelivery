<?php
    include "components/core.php";

    if (isset($_SESSION['user'])) {
        header("Location: add.php");
    }

    if(isset($_POST['reg'])){
        // var_dump($_POST);
     foreach($_POST as $key => $value ){ //проверить ошибки 
        if($key != 'reg'){
            if($value == ''){
                $errors['value'] = "Все поля должны быть заполнены!";
            }
        }
    }
    // var_dump($errors);
    if(!isset($errors)){
    $password = md5($_POST['password']);
   $res = $link->query("INSERT INTO `users`(`login`, `name`, `surname`, `patronymic`, `email`, `phone`, `password`) 
    VALUES ('{$_POST['login']}', '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['patronymic']}', '{$_POST['email']}', '{$_POST['phone']}', '$password')");
    var_dump($res);
}

}
    include "components/header.php";

?>
 <main>
    <form action= "reg.php" method="post">
        <p>
            <label for="login">login</label>
            <input required type="text" name="login" id="login">
        </p>
        <p>
            <label for="password">Пароль</label>
            <input required type="password" name="password" id="password">
        </p>
        <p>
            <label for="surname">Фамилия</label>
            <input required type="text" name="surname" id="surname">
        </p>
        <p>
            <label for="name">Имя</label>
            <input required type="text" name="name" id="name">
        </p>
        <p>
            <label for="patronymic">Отчество</label>
            <input required type="text" name="patronymic" id="patronymic">
        </p>
        <p>
            <label for="phone">Телефон</label>
            <input required type="text" name="phone" id="phone">
        </p>
        <p>
            <label for="email">Email</label>
            <input required type="email" name="email" id="email">
        </p>
        <?php
            if(isset($errors)){
                foreach($errors as $key => $value){
                    echo "<p>$value</p>";
                }
            }
        ?>
        <button name="reg">
            Зарегистрироваться
        </button>
    </form>
</main>  

</body>
</html>