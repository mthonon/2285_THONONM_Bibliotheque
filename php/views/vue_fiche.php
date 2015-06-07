<?php 
$livres = $data['data'];

?>
<div class="menuLongeur">
	<div class="menuPrinc">
		<ul>
			<li><a href="index.php" class="passif">Accueil</a></li>
			<li><a href="index.php?a=viewAuteurs&e=posts" class="passif">Auteurs</a></li>
			<li><a href="index.php?a=viewEditions&e=posts" class="passif">Edition</a></li>
			<li><a href="index.php?a=viewGenre&e=posts" class="passif">Genre</a></li>
			<li><a href="index.php?a=viewEmplacement&e=posts" class="passif">Emplacement</a></li>
			<li><a href="index.php?a=collect&e=users"class="passif">Profil</a></li>
		</ul>
	</div>
</div>
<?php if ($livres != '' && sizeof($livres)>0)
{	
	foreach($livres as $livre): ?>
		<div class="contener">
			<div class="fiches">
				<div class="img">
					<img src="<?php echo $livre['vignette'];?>"/>
				</div>
				<div class="infos">
					<p class="inputFiche">Auteur :<a href="<?php echo "index.php?a=viewAuteurs&e=posts&auteursId=".$livre['auteur'];?>"> <?php echo $livre['auteur'];?></a></p>
					<p class="inputFiche">Titre : <?php echo $livre['titre'];?></p>
					<p class="inputFiche">Maison d'édition :<a href="<?php echo "index.php?a=viewEditions&e=posts&editionId=".$livre['maison_edit_id']; ?>"> <?php echo $livre['nom_maisonEdit'];?></a></p>
					<p class="inputFiche">Année d'édition :<a href="<?php echo "index.php?a=viewAnneeEdition&e=posts&anneeId=".$livre['annee_edit']; ?>"> <?php echo $livre['annee_edit'];?></a></p>
					<p class="inputFiche">Genre :<a href="<?php echo "index.php?a=viewGenre&e=posts&genreId=".$livre['genre_id']; ?>"> <?php echo $livre['nom_categorie'];?></a></p>
					<p class="inputFiche">Emplacement : <a href="<?php echo "index.php?a=viewEmplacement&e=posts&emplacementId=".$livre['emplacement_id']; ?>"><?php echo $livre['nom_emplacement'];?></a></p>
					<p class="inputFiche">Résumé : <?php echo $livre['resume'];?></p>
				</div>
			</div>
		</div>	
	<?php endforeach;
}?>