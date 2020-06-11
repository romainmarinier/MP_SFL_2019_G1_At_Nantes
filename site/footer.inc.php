<footer>
        		<div id="Bloc_entier">
        			<div id="Bloc_gauche"> <img src="img/Chronometre.png">&emsp;INFOS DERNIERES MINUTES</div>

        			<div id="Bloc_droite"> 
        				

						<?php
						try
						{
		// On se connecte à MySQL
							$bdd = new PDO('mysql:host=localhost;dbname=atletico;charset=utf8', 'root', 'root');
						}
						catch(Exception $e)
						{
		// En cas d'erreur, on affiche un message et on arrête tout
							die('Erreur : '.$e->getMessage());
						}

	// Si tout va bien, on peut continuer

	// On récupère tout le contenu de la table score
						$reponse = $bdd->query('SELECT * FROM article');

	// On affiche chaque entrée une à une

						while ($donnees = $reponse->fetch())
						{
							?>
							
							<div class="date"> <?php echo $donnees['date']; ?> </div>
							<div class="article"> <?php echo $donnees['article']; ?> </div>
							
							<?php
						}


	$reponse->closeCursor(); // Termine le traitement de la requête

	?>









        			</div>

        		</div>
        	</footer>
    </body>
</html>