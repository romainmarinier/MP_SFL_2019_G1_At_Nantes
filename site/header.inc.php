            <?php
            if(!isset($page)) {
            $page = "";
            }
            ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="css/main.css" />
         <link rel="stylesheet" href="css/index.css" />
         <link rel="stylesheet" href="css/effectif_pro.css" />
         <link rel="stylesheet" href="css/histoire.css" />
         <link rel="stylesheet" href="css/photo.css" />
        <title> Atlético Nantais - <?php echo $page; ?> </title>
    </head>

    <body>
        	<header>
                <div id="conteneur2">
        		<div id="logo">
        			<div class="le_logo"> <a href="index.php";> <img src="img/logoatleticonantais.png"></a>  </div>
        		</div>

        		<nav>
        		<div id="menu_naviguant">
        			<ul>
        				<li><a href="#">RESULTATS/CALENDRIER</a></li>
        				<li><a href="effectif_pro.php">EFFECTIF PRO</a></li>
        				<li><a href="histoire.php">HISTORIQUE</a></li>
        				<li><a href="photo.php">PHOTOS</a></li>
        			</ul>
        		</div>
        		</nav>
            </div>
        	</header>