<?php

if (!empty($_GET['page'])){
    $view = !empty($_GET['view'])? $_GET['view'] : 'list';
    $fileHtml = "/App_web/views/$_GET[page]/$view.php";
}else{
    $fileHtml = "/App_web/views/menu.php";
}

require_once dirname(__DIR__) . $fileHtml;