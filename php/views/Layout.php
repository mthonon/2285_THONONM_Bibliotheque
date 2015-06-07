<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Bibliotheque</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" media="all and (min-width:1525px)">
	<link rel="stylesheet" type="text/css" href="./css/littleStyle.css" media="all and (max-width:1524px)">
</head>
<body>
	<div class="enTete">
		<h1 class="titrePrinc">Online<span>BOOK</span></h1>
	</div>
	<?php include($data['view']); ?>
		<div class="footer">
		<ul>
			<li>
				<div class="infos">
					<h4>Bibliothèque Oupeye <br/>(Dépot principal)</h4>
					<p> rue Roi Albert 194 <br/> 4680 OUPEYE</p>
					<p>Tél : 04/248.13.05</p>
				</div>
			</li>
			<li>
				<div class="infos">
					<h4>Bibliothèque Hermée <br/>(Dépot secondaire)</h4>
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
			<a href="https://www.facebook.com/pages/OnlineBook/1613425932208025?fref=ts"title="Direction la page officielle Facebook d'OnlineBook"><img src="./img/facebook.png"></a>
			<a href="https://twitter.com/OnlineBookBibli" title="Direction la page officielle Twitter d'OnlineBook"><img src="./img/twitter.png"></a>
		</ul>
	</div>


</body>
</html>