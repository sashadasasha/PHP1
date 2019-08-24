<?php
/* Модуль для работы с базой данных
 * набор функций для соединени и получения данных
 *
 */

/*
 * Функция, осуществляющая соединение с базой данных и возвращающее его
 * static позволяет сохранить состояние и вернуть уже текущее соединение
 * чтобы не делать нового
 */
function getDb($name_base) {
    static $db = null;

    if (is_null($db)) {
        $db = @mysqli_connect(HOST, USER, PASS, $name_base) or die("Could not connect: " . mysqli_connect_error());
    }
    return $db;
}

/*
 * Обертка для выполнения запроса на получение данных
 * Данные возвращаются в виде ассоциативного массива
 * Цикл по получению данных уже реализован в этой функции
 */
function getAssocResult($sql, $name_base)
{
    $db = getDb($name_base);
    $result = @mysqli_query($db, $sql) or die(mysqli_error($db));
    $array_result = [];
    while ($row = mysqli_fetch_assoc($result))
        $array_result[] = $row;
    return $array_result;
}

function getResult ($sql, $name_base) {
    $db = getDb($name_base);
    return @mysqli_query($db, $sql) or die(mysqli_error($db));

}

//При желании можно закрыть соединение (если уж и вызывать, то после render на главной)
function closeDb() {
    mysqli_close(getDb());
}