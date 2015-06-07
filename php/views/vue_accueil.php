<?php $livres = $data['data']?>

<div class="menuLongeur">
	<div class="menuPrinc">
		<ul>
			<li><a href="#" class="actif">Accueil</a></li>
			<li><a href="index.php?a=viewAuteurs&e=posts" class="passif">Auteurs</a></li>
			<li><a href="index.php?a=viewEditions&e=posts" class="passif">Edition</a></li>
			<li><a href="index.php?a=viewGenre&e=posts" class="passif">Genre</a></li>
			<li><a href="index.php?a=viewEmplacement&e=posts" class="passif">Emplacement</a></li>
			<li><a href="index.php?a=collect&e=users"class="passif">Profil</a></li>
		</ul>
	</div>
</div>
<div class="contener">
	<div class="divPrinc">
		<h2>Nouveautés</h2>
		<?php foreach($livres as $livre): ?>
			<a href="<?php echo "index.php?a=viewFiche&e=posts&livresId=".$livre['id']; ?>" title="<?php echo'Vers la fiche du livre : '.$livre['titre']?>"><img src="<?php echo $livre['vignette'];?>"/></a>
		<?php endforeach; ?>	
		<h2>L'auteur du mois</h2>
		<h3>Guillaume MUSSO</h3>
		<ul class="auteurMois">
			<li><img src="img/Musso1.jpg" title="l'écrivain Guillaume MUSSO " alt="Photo de l'écrivian Guillaume MUSSO "></li>
			<li><p>Né en 1974 à Antibes, Guillaume Musso rencontre la littérature à dix ans. A 19 ans, fasciné par les Etats-Unis, il séjourne plusieurs mois à New York et dans le New Jersey.Il passe une licence de sciences économiques et réussit le Capes de sciences-éco, pour exercer avec conviction le métier de professeur. Après un accident de voiture, il débute l’écriture d’une histoire ayant pour point de départ une Expérience de Mort Imminente vécue par un enfant. Et Après… sort en librairie en janvier 2004. Porté par une atmosphère unique et une écriture moderne, le roman séduit les lecteurs dès sa parution.<br/> 
			Cette incroyable rencontre avec les lecteurs se poursuit par l’immense succès de tous ses titres : Sauve-moi, Seras-tu là ?, Parce que je t’aime, Je reviens te chercher, Que serais-je sans toi ?, La Fille de Papier, L’Appel de l’ange, 7 ans après et Demain…
			Mêlant intensité, suspense et amour, ses romans ont fait de lui un des auteurs français favoris du grand public, traduit dans le monde entier, et adapté au cinéma.</p></li>
		</ul>
	</div>
</div>
