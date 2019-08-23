<?php
//Точка входа в приложение, сюда мы попадаем каждый раз когда загружаем страницу

include_once "../config/config.php";

$url_array = explode("/", $_SERVER['REQUEST_URI']);

//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index
if ($url_array[1] == "") {
    $page = 'main';
} else {
    $page = $url_array[1];
}

$params = prepareVariables($page);

//Вызываем рендер, и передаем в него имя шаблона и массив подстановок
echo render($page, $params);

