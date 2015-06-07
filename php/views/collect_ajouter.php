<?php 
$categorieList = $data['data'];
$editionList = $data['data02'];
$emplacementList=$data['data03'];
$livres = $data['data04'];
?>

<div class="menuLongeur">
		<div class="menuPrinc">
			<ul>
				<li><a href="index.php" class="passif">Accueil</a></li>
				<li><a href="index.php?a=viewAuteurs&e=posts" class="passif">Auteurs</a></li>
				<li><a href="index.php?a=viewEditions&e=posts" class="passif">Edition</a></li>
				<li><a href="index.php?a=viewGenre&e=posts" class="passif">Genre</a></li>
				<li><a href="index.php?a=viewEmplacement&e=posts" class="passif">Emplacement</a></li>
				<li><a href="index.php?a=collect&e=users"class="actif">Profil</a></li>
			</ul>
		</div>
</div>
<div class="contener">
	<div class="disconnect"><a href="index.php?a=disconnect&e=users">Déconnecter</a></div>
	<h2>Ajouter un livre </h2>
	
	<div class="module">
		<div class="Ajouter">
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
				<div class="InfosLivre <?php echo isset($errors['titre'])?'has-error':''; ?>">
					<label 	for="titre" class="control-label">Titre :</label>
					<input 	type="text"
							name="titre"
							id="titre"
							class="form-control"
							value="<?php echo isset($titre)?$titre:''; ?>">
				</div>
				<div class="InfosLivre <?php echo isset($errors['auteur'])?'has-error':''; ?>">
					<label 	for="auteur" class="control-label">Auteur :</label>
					<input 	type="text"
							value="Prénom NOM" 
							onclick="this.value='';"
					 		name="auteur"
							id="auteur"
							class="form-control"><?php echo isset($auteur)?$auteur:'' ?>
				</div>
				
				<div class="InfosLivre">
					<label for="name" class="control-label">Genre :</label>
					<select name="genre" id="genre" class="form-control">
						<?php foreach ($categorieList as $listechoixcat): ?>
				    	    <option value=<?php echo $listechoixcat['id'];?>><?php echo $listechoixcat['genre'];?></option>
						<?php endforeach;?>
					</select>
				</div>
				<div class="InfosLivre">
					<label for="name" class="control-label">Édition :</label>
					<select name="edition" id="edition" class="infosLivre">
						<?php foreach ($editionList as $listechoixedit): ?>
							<option value=<?php echo $listechoixedit['id'];?>><?php echo $listechoixedit['maison'];?></option>
						<?php endforeach;?>
					</select>
				</div>
				<div class="InfosLivre2 <?php echo isset($errors['resume'])?'has-error':''; ?>">
					<label 	for="annee_id" class="control-label">Année d'édition :</label>
					<input 	type="text"
					 		name="annee_ed"
							id="annee_ed"
							class="form-control"><?php echo isset($auteur)?$auteur:'' ?>
				</div>
				<div class="InfosLivre2">
					<label for="name" class="control-label">Emplacement :</label>
					<select name="emplacement" id="emplacement" class="infos">
						<?php foreach ($emplacementList as $listechoixemp): ?>
					        <option value=<?php echo $listechoixemp['id'];?>><?php echo $listechoixemp['emplacement'];?></option>
						<?php endforeach;?>
					</select>
				</div>
				
				<div class="resume <?php echo isset($errors['resume'])?'has-error':''; ?>">
					<label 	for="resume" class="control-label">Résumé</label>
					<textarea 	name="resume"
								id="resume"
								cols="30"
								rows="10"
								class="form-control"><?php echo isset($auteur)?$auteur:'' ?></textarea>
				</div>
				<label for="monfichier"> choix du fichier</label>
				<input name="MAX_FILE_SIZE"
					   value="1000000"
					   type="hidden">
				<input type="file"
					   name="monfichier"
					   id="monfichier">
				<div>
       				<input name="a"	type="hidden" value="ajouter">
        			<input name="e" type="hidden" value="posts">
    			</div>
				<div class="boutonAjout">
					<input 	type="submit"
							value="Ajouter"
							name="Ajouter"
							class="btn btn-default">
				</div>
			</form>
			<?php for ($i=0; $i <10000; $i++) { }?>
		</div>
	</div>

	<?php if (isset($_SESSION ['user'])&& $_SESSION ['connected'] == 1) {?>
		<h2>Votre historique</h2>
		
    	<?php if ($livres != '' && sizeof($livres)>0) 
		{ 	
			$i=1;
			$j=1;
			$ibreak=0;
			$imaxlivre=sizeof($livres) + 1;
			foreach($livres as $livre): 
				if ($j < $_SESSION['indice_livre'])
				{
					$j=$j +1;
				}
				else 
				{
				?>
					<div class="fiches">
						<p class="ModifDelte"><a href="<?php echo "index.php?a=update&e=posts&livreId=".$livre['id']; ?>"title="<?php echo "Modifier la fiche du livre : ".$livre['titre']?>">Modifier</a><a href="<?php echo "index.php?a=deleteLivre&e=posts&livreId=".$livre['id']; ?>"title="<?php echo "Supprimer la fiche du livre : ".$livre['titre']." avec une confirmation"?>">Supprimer</a></p>
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
				<?php
					$i=$i + 1;
					$j=$j + 1;
					$_SESSION['indice_livre']=$_SESSION['indice_livre'] + 1;
					
					if ($i == 5 && $_SESSION['indice_livre'] < $imaxlivre)
					{
						$ibreak=1; ?>
						<p class="suivant"><a href="index.php?a=addBook&e=posts" class="suivant"> suivants</a></p>
						<?php
						break;
					}
                }
			endforeach;
			if ($ibreak == 0) 
			{
				$_SESSION['indice_livre'] = 1;
			}
		}
	}?>
	
</div>