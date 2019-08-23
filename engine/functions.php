<?php

/*
 * Функция подготовки переменных для передачи их в шаблон
 */
function prepareVariables($page)
{
    $params = [];

    switch ($page) {

        case 'main':
            $params = [];
            break;

        case 'news':
            $params = [
                'news' => getNews()
            ];

            break;

        case 'newscontent':
            $params = [
                'news' => getNewsContent($_GET['id'])
            ];

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
            header('Content-Type: application/json');
            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            die();
            break;
        case 'gallery':
        $params = [
            'img' => getImg()
        ];
            
            break;

        case 'image':
        $params = [
            'img' => getBigImg($_GET['id'])
        ];
        break;
    }
    return $params;
}

function getNews() {
  $news = getAssocResult("SELECT * FROM news", "news");
    return $news;
}

function getNewsContent($id) {

    $id = (int)$id;
    $sql = "SELECT * FROM news WHERE id = {$id}";
    $news = getAssocResult($sql, "news");

    //В случае если новости нет, вернем пустое значение
    $result = [];
    if(isset($news[0]))
        $result = $news[0];
    return $result;
}

function getImg() {
    $img = getAssocResult("SELECT * FROM gallery_root", "gallery");
    return $img;
}

function getBigImg($id) {

    $id = (int)$id;
    viewsUpdate($id);
    $sql = "SELECT * FROM gallery_root WHERE id = {$id}";
    $img = getAssocResult($sql, "gallery");
    
    
    $result = [];
    if(isset($img[0]))
        $result = $img[0];
    return $result;
}

function render($page, $param = [])
{
    return renderTemplate(LAYOUTS_DIR . "layout", ['content' => renderTemplate($page, $param)]);
}

function viewsUpdate($id) {
    $id = (int)$id;
    $db = getDb("gallery");
    mysqli_query($db, "UPDATE gallery_root SET views = views + 1 WHERE id = {$id}");
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