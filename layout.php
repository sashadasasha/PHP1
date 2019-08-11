<?php 

function renderTemplate($page, $header = '', $menu = '', $footer = '')
{
    ob_start();
    include $page. ".tmpl";
    return ob_get_clean();
}

echo renderTemplate('doctype', renderTemplate('header'), renderTemplate('menu'), renderTemplate('footer'));