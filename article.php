<?php
    //echo "Article";
    require_once("database.php");
    require_once("models/articles_function.php");

    $articles = articles_get($_GET['id']);

    include("views/article_template.php");
?>