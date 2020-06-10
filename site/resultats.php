					<?php
					$page="Resultats/Calendrier";
					include 'header.inc.php';
					?>

					<div id="conteneur2">
						<div class="text"> RESULTATS / CALENDRIER </div>
					</div>

					<div id="bdd">
				
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
						$reponse = $bdd->query('SELECT * FROM score');

	// On affiche chaque entrée une à une

						while ($donnees = $reponse->fetch())
						{
							?>
							<div id="romain">
							<p>
								<div class="competition">Competition : <?php echo $donnees['competition']; ?></div><br />
								<div class="score"> <img src="img/logo/Atletico.png"> &nbsp;<img src="img/logo/<?php echo $donnees['logo']; ?>" /> &nbsp;<strong id="red">ATLETICO NANTAIS &nbsp</strong> - &nbsp;<?php echo $donnees['adverse']; ?>
								: &nbsp;<?php echo $donnees['score']; ?>,
								 &nbsp;<?php echo $donnees['lieu']; ?> </div>
								 
							</p>
							</div>
							<?php
						}


	$reponse->closeCursor(); // Termine le traitement de la requête

	?>

	</div>

	<?php
	include 'footer.inc.php';
	?>