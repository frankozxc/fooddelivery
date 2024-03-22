<?php
    include "components/core.php";

    if (!isset($_SESSION['user'])) {
        header("Location: index.php"); // если сессии нет, переходим на индекс
    }

    if (isset($_POST['add'])) { // добавление в базу данных
        $link->query("INSERT INTO `statements`(`user_id`, `status_id`, `login`, `number`) 
        VALUES ('{$_SESSION['user']['id']}', '1', '{$_POST['login']}', '{$_POST['number']}')");
    }

    include "components/header.php";

?>
  <main>
    <form action= "add.php" method="post">
        <p>
            <label for="number">Номер</label>
            <input required type="text" name="number" id="number">
        </p>
        <p>
            <label for="login">login</label>
            <input required type="text" name="login" id="login">
        </p>
        
        <button name="add">
            Сформировать заявление
        </button>
    </form>
</main>   

</body>
</html>