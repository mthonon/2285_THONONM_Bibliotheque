<?php
$categorieList = $data['data'];
$editionList = $data['data02'];
$emplacementList=$data['data03'];
$livres = $data['data04'];
 ?>
<div class="contener">
	<h2>Modifier ce livre :</h2>
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
	<h2>Veuillez modifier ici : </h2>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
		<div class="module">
			<div class="Ajouter">
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
					<div class="InfosLivre <?php echo isset($errors['titre'])?'has-error':''; ?>">
						<label 	for="titre" class="control-label"></label>
						<input 	type="hidden"
								name="id"
								id="id"
								class="form-control"
								value="<?php echo $livre['id']; ?>">
					</div>
					<div class="InfosLivre <?php echo isset($errors['titre'])?'has-error':''; ?>">
						<label 	for="titre" class="control-label">Titre :</label>
						<input 	type="text"
								name="titre"
								id="titre"
								class="form-control"
								value="<?php echo $livre['titre']; ?>">
					</div>
					<div class="InfosLivre <?php echo isset($errors['auteur'])?'has-error':''; ?>">
						<label 	for="auteur" class="control-label">Auteur :</label>
						<input 	type="text"
						 		name="auteur"
								id="auteur"
								class="form-control"
								value="<?php echo $livre['auteur']; ?>">
					</div>
					
					<div class="InfosLivre">
						<label for="name" class="control-label">Genre :</label>
						<select name="genre" id="genre" class="form-control">
							<?php foreach ($categorieList as $listechoixcat): ?>
								<?php if ($listechoixcat['genre'] ==  $livre['nom_categorie']) {?>
									<option  selected value=<?php echo $listechoixcat['id'];?>><?php echo $listechoixcat['genre'];?></option>
								<?php } else { ?>
									<option value=<?php echo $listechoixcat['id'];?>><?php echo $listechoixcat['genre'];?></option>
								<?php } ?>
							<?php endforeach;?>
						</select>
					</div>
					<div class="InfosLivre">
						<label for="name" class="control-label">Édition :</label>
						<select name="edition" id="edition" class="infosLivre">
							<?php foreach ($editionList as $listechoixedit): ?>
								<?php if ($listechoixedit['maison'] == $livre['nom_maisonEdit']) {?>
									<option  selected value=<?php echo $listechoixedit['id'];?>><?php echo $listechoixedit['maison'];?></option>
								<?php } else { ?>
									<option value=<?php echo $listechoixedit['id'];?>><?php echo $listechoixedit['maison'];?></option>
								<?php } ?>
							<?php endforeach;?>
						</select>
					</div>
					<div class="InfosLivre2 <?php echo isset($errors['resume'])?'has-error':''; ?>">
						<label 	for="annee_id" class="control-label">Année d'édition :</label>
						<input 	type="text"
						 		name="annee_ed"
								id="annee_ed"
								class="form-control"
								value="<?php echo $livre['annee_edit']; ?>">
					</div>
					<div class="InfosLivre2">
						<label for="name" class="control-label">Emplacement :</label>
						<select name="emplacement" id="emplacement" class="infos">
							<?php foreach ($emplacementList as $listechoixemp): ?>
								<?php if ($listechoixemp['emplacement'] == $livre['nom_emplacement']) {?>
									<option  selected value=<?php echo $listechoixemp['id'];?>><?php echo $listechoixemp['emplacement'];?></option>
								<?php } else { ?>
									<option value=<?php echo $listechoixemp['id'];?>><?php echo $listechoixemp['emplacement'];?></option>
								<?php } ?>
							<?php endforeach;?>
						</select>
					</div>
				
					<div class="resume <?php echo isset($errors['resume'])?'has-error':''; ?>">
						<label 	for="resume" class="control-label">Résumé</label>
						<textarea 	name="resume"
									id="resume"
									cols="30"
									rows="10"
									class="form-control"> <?php echo $livre['resume']; ?></textarea>
					</div>
					<label for="monfichier"> choix du fichier</label>
					<input name="MAX_FILE_SIZE"
						   value="1000000"
						   type="hidden">
					<input type="file"
						   name="monfichier"
						   id="monfichier"
						   value="<?php echo $livre['vignette']; ?>">
					<div>
       					<input name="a"	type="hidden" value="modifier">
        				<input name="e" type="hidden" value="posts">
    				</div>
					<div class="boutonAjout">
						<input 	type="submit"
								value="Modifier"
								name="Modifier"
								class="btn btn-default">
					</div>
				</form>
				<?php for ($i=0; $i <10000; $i++) { }?>
			</div>
		</div>
	</form>
</div>		
</body>
</html>