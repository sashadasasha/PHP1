<?php

function render($page, $param = [])
{
    return renderTemplate("layout", ['content' => renderTemplate($page, $param)]);
}


function renderTemplate($page, array $params = [])
{
    ob_start();

    extract($params);

    $filename = TEMPLATES_DIR . $page . ".php";

    if (file_exists($filename)) {
        include $filename;
    } else {
        die("Страницы не существует 404");
    }


    return ob_get_clean();
}