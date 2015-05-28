<?php $livres = $data['data']?>

	<div class="menuLongeur">
		<div class="menuPrinc">
			<ul>
				<li><a href="#" class="actif">Accueil</a></li>
				<li><a href="index.php?a=viewAuteurs&e=posts" class="passif">Auteurs</a></li>
				<li><a href="index.php?a=viewEditions&e=posts" class="passif">Edition</a></li>
				<li><a href="index.php?a=viewGenre&e=posts" class="passif">Genre</a></li>
				<li><a href="index.php?a=viewEmplacement&e=posts" class="passif">Emplacement</a></li>
				<li><a href="index.php?varAccesPage=connection"class="passif">Profil</a></li>
			</ul>
		</div>
	</div>
	<div class="contener">
		<div class="divPrinc">
	<h2>Nouveautés</h2>
		<?php foreach($livres as $livre): ?>
			<?php //$fileName= 'img/iconesLivres/'.str_replace(' ', '_', $livre['titre']).'.jpg';?>
			<!--Ajouter une balise a autour pour arriver à la fiche technique -->
			<img src="<?php echo $livre['vignette'];?>"/>
		<?php endforeach; ?>	
		<h2>L'auteur du mois</h2>
		<h3>Guillaume MOSSU</h3>
		<ul class="auteurMois">
			<li><img src="img/Musso1.jpg" title="Guillaume MUSSO écrivain" alt="Guillaume MUSSO écrivian"></li>
			<li><p>Né en 1974 à Antibes, Guillaume Musso rencontre la littérature à dix ans. A 19 ans, fasciné par les Etats-Unis, il séjourne plusieurs mois à New York et dans le New Jersey.Il passe une licence de sciences économiques et réussit le Capes de sciences-éco, pour exercer avec conviction le métier de professeur. Après un accident de voiture, il débute l’écriture d’une histoire ayant pour point de départ une Expérience de Mort Imminente vécue par un enfant. Et Après… sort en librairie en janvier 2004. Porté par une atmosphère unique et une écriture moderne, le roman séduit les lecteurs dès sa parution.<br/> 
			Cette incroyable rencontre avec les lecteurs se poursuit par l’immense succès de tous ses titres : Sauve-moi, Seras-tu là ?, Parce que je t’aime, Je reviens te chercher, Que serais-je sans toi ?, La Fille de Papier, L’Appel de l’ange, 7 ans après et Demain…
			Mêlant intensité, suspense et amour, ses romans ont fait de lui un des auteurs français favoris du grand public, traduit dans le monde entier, et adapté au cinéma.</p></li>
		</ul>
</div>
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
