<?php
//Файл констант
define("TEMPLATES_DIR", '../views/');
define("LAYOUTS_DIR", 'layout/');

const ERR_CODE = [
  null => "",
  "OK" => "Отзыв добавлен!",
  "DELETED" => "Отзыв удален!",
  "ERROR_ADD" => "Ошибка добавления отзыва!",
  "ERROR_DEL" => "Ошибка удаления отзыва!",
  "ERROR_UPDATE" => "Ошибка изменения отзыва!",
  "UPDATED" => "Отзыв изменен!"
];

/* DB config */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'test');

//Тут же подключим основные функции нашего приложения, пока это render
//Можете кстати подключить и в главном index.php если такая вложенность напрягает
include_once "../engine/functions.php";
include_once "../engine/log.php";
include_once "../engine/db.php";


