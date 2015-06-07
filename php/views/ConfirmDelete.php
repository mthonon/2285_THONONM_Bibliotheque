<?php $livres = $data['data']; ?>
<div class="contener">
	<h2>Voulez-vous supprimer ce livre :</h2>
	<div class="fiches">
		<?php foreach($livres as $livre): ?>
			<div class="img">
				<img src="<?php echo $livre['vignette'];?>"/>
			</div>
			<div class="infos">
				<p class="inputFiche">Auteur : <?php echo $livre['auteur'];?></p>
				<p class="inputFiche">Titre : <?php echo $livre['titre'];?></p>
				<p class="inputFiche">Maison d'édition : <?php echo $livre['nom_maisonEdit'];?></p>
				<p class="inputFiche">Année d'édition : <?php echo $livre['annee_edit'];?></p>
				<p class="inputFiche">Genre : <?php echo $livre['nom_categorie'];?></p>
				<p class="inputFiche">Emplacement : <?php echo $livre['nom_emplacement'];?></p>
				<p class="inputFiche">Résumé : <?php echo $livre['resume'];?></p>
			</div>
		<?php endforeach; ?>
	</div>
	<form action="<?php echo "index.php?a=ConfirmDelete&e=posts&id=".$livre['id'];?>" method="post">
		<input type="submit" value="Oui" id="Oui" name="YESdelete"/>
		<input type="submit" value="Non" id="Non" name="NOdelete"/>
	</form>
</div>		
</body>
</html>