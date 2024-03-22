<?php
    include "components/core.php";

    if (!isset($_SESSION['user'])) {
        header("Location: index.php"); // если сессии нет, переходим на индекс
    }else{
        if($_SESSION['user']['isAdmin'] != 1){
            header("Location: index.php");
        }
    }
    var_dump($_POST);


    $statements = $link->query("SELECT `statuses`.*, `users`.*, `statements`.*
        FROM `statements` 
            LEFT JOIN `statuses` ON `statements`.`status_id` = `statuses`.`id` 
            LEFT JOIN `users` ON `statements`.`user_id` = `users`.`id`"); // получаем все заявления вошедшего в профиль
    include "components/header.php";

?>
  <main>
   <?php //вывод заявлений
    foreach ( $statements as $key => $value) {?>
        <div style="border-bottom: 1px solid #000000;">
            <h2>ФИО: <?= $value['surname']; ?> <?= $value['name']; ?> <?= $value['patronymic']; ?></h2>
            <h2>Номер: <?= $value['number']; ?> </h2>
            <p>Статус: <?= $value['status']; ?></p>
            <p>Описнаие: <?= $value['descriptions']; ?></p>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $value['id']; ?>">
                <button name="+">
                    Принять
                </button>
                <button name="-">
                    Отклонить
                </button>
            </form>
        </div>
   <?php }?>
</main>   

</body>
</html>