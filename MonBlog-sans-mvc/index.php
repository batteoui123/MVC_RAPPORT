<!doctype html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styleBlog.css" />
    <title>Mon Blog</title>
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="index.php">Mon Blog</a></h1>
            <p>bienvenue sur ce  blog</p>
        </div>
    </header>
    <div class="container">
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8',
                'root', '');
        $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_ID desc');
        foreach ($billets as $billet):
            ?>
            <article>
                <header>
                    <h2 class="titreBillet"><?= $billet['titre'] ?></h2>
                    <time><?= $billet['date'] ?></time>
                </header>
                <p><?= $billet['contenu'] ?></p>
            </article>
            <hr />
        <?php endforeach; ?>
    </div> <!-- .container -->
    <footer>
        <div class="container">
            Blog réalisé avec PHP, HTML5 et CSS.
        </div>
    </footer>
</body>
</html>
