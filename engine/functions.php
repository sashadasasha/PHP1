<?php

/*
 * Функция подготовки переменных для передачи их в шаблон
 */
function prepareVariables($page, $action, $id)
{

    $params = [];
    switch ($page) {


        case 'index':
            $params["username"] ="Вася";
            break;
        case 'news':

            $params["news"] = getNews();

            break;
        case 'newspage':
            if ($action=="addlike") {

                echo json_encode(["result" => 1]);
            }
            $content = getNewsContent($id);
            $params['prev'] = $content['prev'];
            $params['text'] = $content['text'];
            break;

        case 'feedback':

            doFeedbackAction($params, $action, $id);

            $params['feedback'] = getAllFeedback();
            break;

        case 'catalog':
            $params['goods'] = getCatalog();
            break;

    }

    return $params;
}

function doFeedbackAction(&$params, $action, $id) {
    $params['error'] = ERR_CODE[$_GET['status']];
    
    $params['action'] = "add";
    $params['buttontext'] ="Добавить";
    $params['name']='';
    $params['feedtext']='';

    if ($action == 'add') {
        if (addFeedBack())
            header("Location: /feedback/?status=OK");
        else
            header("Location: /feedback/?status=ERROR_ADD");    
    }

    if ($action == 'delete') {
        $error = deleteFeedBack($id);
        if ($error)
            header("Location: /feedback/?status=DELETED");
        else
            header("Location: /feedback/?status=ERROR_DEL");    
    }

    if ($action == 'save') {
        $error = updateFeedBack($id);
        if ($error)
            header("Location: /feedback/?status=UPDATED");
        else
            header("Location: /feedback/?status=ERROR_UPDATE");
    }

    if ($action == "edit") {
        $feedback = getFeedBack($id);
        $params['action'] = "save/{$id}";
        $params['buttontext'] ="Править";
        $params['name']=$feedback['name'];;
        $params['feedtext']=$feedback['feedback'];

    }
}  

function updateFeedback($id) {
    $db = getDb();
    $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
    $message = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['message'])));
    $sql = "UPDATE `feedback` SET `name`='{$name}',`feedback`='{$message}' WHERE id = {$id}";
    $result = executeQuery($sql);
    if (mysqli_affected_rows(getDb()) != 1) return false;
    return $result;
}

function deleteFeedBack($id) {
    $sql = "DELETE FROM `feedback` WHERE id={$id}";
    $result = executeQuery($sql);
    if(mysqli_affected_rows(getDb()) != 1) return false;
    return $result;
}

function getFeedback($id) {
    $id = (int)$id;
    $sql = "SELECT * FROM feedback WHERE id={$id}";
    $result = getAssocResult($sql)[0];
    if (mysqli_affected_rows(getDb()) != 1) return false;
    return $result;
}

function addFeedBack() {
    $db = getDb();
    $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
    $message = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['message'])));
    $sql = "INSERT INTO `feedback`(`name`, `feedback`) VALUES ('{$name}','{$message}')";
    $result = executeQuery($sql);
    if (mysqli_affected_rows(getDb()) != 1) return false;
    return $result;
}

function getAllFeedback() {
    $sql = "SELECT * FROM `feedback` ORDER BY id DESC";
    return getAssocResult($sql);
}

function getNewsContent($id){
    $id = (int)$id;
    $sql = "SELECT * FROM news WHERE id = {$id}";
    $news = getAssocResult($sql);

    //В случае если новости нет, вернем пустое значение
    $result = [];
    if(isset($news[0]))
        $result = $news[0];

    return $result;
}


function getNews() {
    $sql = "SELECT * FROM news";
    $news = getAssocResult($sql);
    return $news;
}

function getCatalog() {
    $sql = "SELECT * FROM catalog";
    $goods = getAssocResult($sql);
    return $goods;
}

function getCatalogItem($id) {
    $sql = "SELECT * FROM catalog WHERE id = {$id}";
    $goods = getAssocResult($sql);
    return $goods;
}

function render($page, $params = []) {
    return renderTamplate(LAYOUTS_DIR . 'layout', [
        "content" => renderTamplate($page, $params),
        "menu" => renderTamplate("menu")
    ]);
}


//Функция возвращает текст шаблона $page с подставленными переменными из
//массива $params, просто текст
function renderTamplate($page, $params = [])
{
    ob_start();

    if (!is_null($params)) {
        extract($params);
    }


    $fileName = TEMPLATES_DIR . $page . '.php';

    if (file_exists($fileName)) {
        include $fileName;
    } else {
        Die("Страницы не существует, 404");
    }


    return ob_get_clean();
}

