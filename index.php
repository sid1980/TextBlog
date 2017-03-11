<?php
    require_once("database.php");
    require_once("models/articles_function.php");

    $articles = articles_all();
    
    include("views/articles_template.php");
?>