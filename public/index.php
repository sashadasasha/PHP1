<?php

include_once "../config/config.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'main';
}

$params = [];

switch ($page) {

    case 'main':
        $params = [];
        break;

    case 'catalog':
        $params = [
            'catalog' => [
                "Спички",
                "Метла",
                "Ведро"
            ],
            'name' => "Вася"
        ];
        break;

    case 'apicatalog':
        $params = [
            'catalog' => [
                "Спички",
                "Метла",
                "Ведро"
            ]
        ];
        echo json_encode($params, JSON_UNESCAPED_UNICODE);
        die();
        break;
    case 'gallery':

        $img = array_slice(scandir("../public/gallery_img/small/"),2);
        $params = [
            'images' => $img,
            'addres' => "../public/gallery_img/small/"
        ];

        break;
}

echo render($page, $params);

