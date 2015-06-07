<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./css/style01.css" type="text/css">
</head>
<body>
	<div class="enTete">
		<h1 class="titrePrinc">Online<span>BOOK</span></h1>
		<form action="rech" class="formRecherche">
            <input class="champ" type="text" name="rech"value=" Search..."/>                         
        </form>
	</div>
	<div class="menuLongeur">
		<div class="menuPrinc">
			<ul>
				<li><a href="index.php" class="passif">Accueil</a></li>
				<li><a href="auteurs.html" class="passif">Auteurs</a></li>
				<li><a href="edition.html"class="passif">Edition</a></li>
				<li><a href="index.php?varAccesPage=genre" class="passif">Genre</a></li>
				<li><a href="emplacement.html"class="passif">Emplacement</a></li>
				<li><a href="#"class="actif">Profil</a></li>
			</ul>
		</div>
	</div>
	<div class="contener">
		<?php if (isset($_SESSION ['user'])&& $_SESSION ['connected'] == 1) 
		{?>
			<li><a href="index.php?varAccesPage=deconnection"class="passif">Déconnection</a></li>
			<?php include 'vues/vue_ajouter.php'; ?>
		<?php } else { ?>			
			<h1>Connectez-vous:</h1>
				<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<label for="adresseElect">Adresse électronique :</label>
					<input type="text" id="adresseElect" name="adresseElect"/>

					<label for="password">Mot de passe :</label>
					<input type="password" id="password" name="password"/>
					<input type="submit" value="Connexion" name="Connexion" id="Connexion"/>
				</form>

			<h2>Pas encore inscript ?</h2>
				<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<label for="adresseElectInscrip">Adresse électronique :</label><br/>
					<input type="text" id="adresseElectInscrip" name="adresseElectInscrip"/><br/>
						
					<label for="password">Mot de passe :</label><br/>
					<input type="password" id="password" name="password"/><br/>

					<label for="password">Confirmation mot de passe :</label><br/>
					<input type="password" id="confirmPassword" name="confirmPassword"/><br/>
					<input type="submit" value="Envoyer" name="Envoyer" id="Envoyer"/>
				</form>
		<?php } ?>
	</div>
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