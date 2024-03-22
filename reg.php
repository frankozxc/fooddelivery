<?php
   include "vendor/components/core.php";
   
   if (!isset($_SESSION['user'])) {
       header("Location: index.php");
   }
   if($_POST['itsReg']==true){
     
     if($_POST['password']==$_POST['confirmpassword']){
         $password = md5($_POST['password']);
         $sqlSelectLog="SELECT `id` FROM `users` WHERE `name`='{$_POST['name']}'";
         $rows=$link->query($sqlSelectLog);
         var_dump($rows);
         if($rows->num_rows== 0){
             $res = $link->query("INSERT INTO `users`(`name`,`mail`,`password`) VALUES ('{$_POST['name']}','{$_POST['email']}','{$password}')");
             $_SESSION['user']['name']=$_POST['name'];
             $selId="SELECT `id` FROM `users` WHERE `name`='{$_POST['name']}'";
             $row=mysqli_fetch_assoc($link->query($selId));
             $_SESSION['user']['id'] = $row['id'];
             $_SESSION['errors']='Спасибо за регистрацию! Проверьте вашу электронную почту для ее подтверждения.';

         }else{
              $_SESSION['errors']='Такой логин уже существует, попробуйте другой!';
         }
     }else{
       
        $_SESSION['errors']= 'Пароли несовпадаю, повторите попытку!';
     }

   }else if($_POST['itsReg']==false){
      
    //    $passwordAuto=md5($_POST['password']);

    //    $sqlAuto="SELECT `id`,`name` FROM `users` WHERE `password`='{$passwordAuto}',`name`='{$_POST['name']}'";
    //    $rows=$link->query($sqlAuto);

    //    if($rows -> num_rows==0){
    //         $resAuto=mysqli_fetch_assoc($rows);
    //         $_SESSION['errors']="Ошибка авторизации, неверный логин или пароль!";
    //         var_dump("АХХХХХХХАХАХАХХАХАХАХАХХАХАХАХ");
    //    }else{
    //         $_SESSION['user']['id']=$resAuto['id'];
    //         $_SESSION['user']['name']=$resAuto['name']; 
    //    }

   }
 

?>
 