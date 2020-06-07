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
							<p>
								<strong>Competition :</strong>  <?php echo $donnees['Competition']; ?><br />
								Match contre : <?php echo $donnees['Equipe adverse']; ?>,
								Score : <?php echo $donnees['Score']; ?>,
								Lieu : <?php echo $donnees['Lieu']; ?>,
							</p>
							<?php
						}


	$reponse->closeCursor(); // Termine le traitement de la requête

	?>

	</div>

	<?php
	include 'footer.inc.php';
	?>