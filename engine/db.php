<?php
/* Модуль для работы с базой данных
 * набор функций для соединени и получения данных
 *
 */

function getDb() {

    static $db = null;

    if (is_null($db)) {
        $db = @mysqli_connect(HOST, USER, PASS, DB) or die("Could not connect: " . mysqli_connect_error());
    }

    return $db;
}

//При желании можно закрыть соединение (если уж и вызывать, то после render на главной)
function closeDb() {
    mysqli_close(getDb());
}


/*
 * Обертка для выполнения любого запроса
 * Передаем в параметре текст sql-запроса
 * Возвращаем результат, в основном использовать для
 * операций update и delete, которые не требуют возврата данных
 */
function executeQuery($sql)
{
    $db = getDb();
    $result = @mysqli_query($db, $sql) or die(mysqli_error($db));
    return $result;
}

function getAssocResult($sql)
{
    $db = getDb();
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
