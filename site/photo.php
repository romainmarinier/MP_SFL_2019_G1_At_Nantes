           <?php
            $page="Photos";
            include 'header.inc.php';
            ?>


            

            <div id="conteneur2">
                <div class="text"> PHOTOS </div>
            </div>

            <div id="page_entiere">

            <div id="preambule">LE ''BEST OF'' EN IMAGES ! </div>

            <div id="presentation">La saison 2019-2020 s'est achevée au stade Raymond-Kopa face à RENNES dans le cadre de la 38ème journée de L1. <br/> Auteurs d'une première partie du tableau encourageante, les coéquipiers d'Abdoulaye Touré terminent finalement en <br/>13ème position à dix journées du terme d'un parcours tronqué par la pandémie du  Covid-19. <br/>atleticonantais.com vous propose une rétrospective en images des instants clés qui ont jalonné le parcours 2019-2020 <br/>des "Rouges-et-Noirs".</div>

            <div id="bdd">
                
                        <?php
                        try
                        {
        // On se connecte à MySQL
                            $bdd = new PDO('mysql:host=localhost;dbname=atletico;charset=utf8', 'atleticouser', 'Nantes44');
                        }
                        catch(Exception $e)
                        {
        // En cas d'erreur, on affiche un message et on arrête tout
                            die('Erreur : '.$e->getMessage());
                        }

    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table score
                        $reponse = $bdd->query('SELECT * FROM photo');

    // On affiche chaque entrée une à une

                        while ($donnees = $reponse->fetch())
                        {
                            ?>
                            <div id="bestof">
                                <img src="img/<?php echo $donnees['image']; ?>" />
                                 <div class="soustitre">&nbsp;<?php echo $donnees['soustitre']; ?></div>
                                <div class="resume">&ensp;<?php echo $donnees['resume']; ?></div>
                            </div>
                            <?php
                        }


    $reponse->closeCursor(); // Termine le traitement de la requête

    ?>


           




            <?php
            include 'footer.inc.php';
            ?>