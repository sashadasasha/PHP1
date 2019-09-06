<?php 

function addUser ($login, $pass, $email, $tel) {

  $db = getDb();
  $sql = "INSERT INTO users (login, pass, email, tel) VALUES('$login','$pass','$tel','$email')";
  $result = mysqli_query($db, $sql);

  if ($result == 'TRUE') {
    return 'Вы зарегистрированы';
  } else {
    return "Ошибка! Вы не зарегистрированы";
    }

}