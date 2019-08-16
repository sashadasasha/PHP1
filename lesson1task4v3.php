<?php
 $year = date('Y');
 $title = "Главная страница - страница обо мне";
 $h1 = "Информация обо мне";

 $content = file_get_contents("site.tmpl");

 $content = str_replace ("{{YEAR}}", $year, $content);
 $content = str_replace ("{{TITLE}}", $title, $content);
 $content = str_replace ("{{H1}}", $h1, $content);

 echo $content;