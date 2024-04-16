<?php $title="Mon Blog" ;
 ob_start()?>
<?php foreach ($billets as $billet):?>
                    <article>
                        <header>
                            <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
                            <time><?= $billet['date'] ?></time>
                        </header>
                        <p><?= $billet['contenu'] ?></p>
                    </article>
                    <hr />
<?php endforeach; ?>
<?php $content=ob_get_clean();
require_once("gabarit.php");?>
           
