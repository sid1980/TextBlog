<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Text Blog</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap_3_3_7/bootstrap.min.css">
    </head>
    <body>
        <div class="container"> 
            <h1>Текстовый Блог</h1>
            <div>
                <?php foreach($articles as $a): ?>
                    <div class="article">
                        <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                        <em> Опубликованно: <?=$a['date']?></em>
                        <p> <?=$a['content']?></p>
                    </div>
                <?php endforeach ?>
            </div>
            <footer>
                <p> Text Blog <br> Copyright &copy; 2015 </p>
            </footer>
        </div>
    </body>
</html>