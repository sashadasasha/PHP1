<?php 

function renderTemplate($page, $content = '')
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}

renderTemplate('main', 123);