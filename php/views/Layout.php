<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Bibliotheque</title>
	<link rel="stylesheet" type="text/css" href="./css/style01.css">
</head>
<body>
	<div class="enTete">
		<h1 class="titrePrinc">Online<span>BOOK</span></h1>
		<form action="rech" class="formRecherche">
            <input class="champ" type="text" name="rech"value=" Search..."/>                         
        </form>
	</div>
	<?php include($data['view']); ?>
		<div class="footer">
		<ul>
			<li>
				<div class="infos">
					<h4>Bibliothèque Oupeye <br/>(Dépos principal)</h4>
					<p> rue Roi Albert 194 <br/> 4680 OUPEYE</p>
					<p>Tél : 04/248.13.05</p>
				</div>
			</li>
			<li>
				<div class="infos">
					<h4>Bibliothèque Hermée <br/>(Dépos secondaire)</h4>
					<p> rue de Fexhe-Slins 18a  <br/> 4680 HERMÉE</p>
					<p>Tél :04/278.00.07</p>
				</div>
			</li>
			<li>
				<div class="infos">
					<h4>L'oiseau lire <br/>(collaborateur)</h4>
					<p> Rue du Collège 10 <br/> 4600 VISÉ </p>
					<p>Tél : 04/379.77.91</p>
				</div>
			</li>
			<img src="./img/facebook.png"> <img src="./img/twitter.png">
		</ul>
	</div>


</body>
</html>