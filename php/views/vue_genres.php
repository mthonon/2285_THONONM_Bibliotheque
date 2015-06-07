<?php 
$categorieList = $data['data'];
$livres = $data['data02'];
$oGenreId=$data['data03'];
?>
<div class="menuLongeur">
	<div class="menuPrinc">
		<ul>
			<li><a href="index.php" class="passif">Accueil</a></li>
			<li><a href="index.php?a=viewAuteurs&e=posts" class="passif">Auteurs</a></li>
			<li><a href="index.php?a=viewEditions&e=posts" class="passif">Edition</a></li>
			<li><a href="index.php?a=viewGenre&e=posts" class="actif">Genre</a></li>
			<li><a href="index.php?a=viewEmplacement&e=posts" class="passif">Emplacement</a></li>
			<li><a href="index.php?a=collect&e=users"class="passif">Profil</a></li>
		</ul>
	</div>
</div>
<div class="menu2">
	<ul>
		<?php foreach($categorieList as $genre): ?>
			<li><a href="<?php echo "index.php?a=viewGenre&e=posts&genreId=".$genre['id']; ?>"><?php echo $genre['genre'];?></a></li>
		<?php endforeach; ?>	
	</ul>
</div>
<div class="contener">
	<div class="divPrinc">
		<h2>Genres :</h2>
		<?php if($oGenreId != ''){ 
			foreach($oGenreId as $genreLibelle): ?>
				<p><?php echo $genreLibelle['genre'];?></p>
			<?php endforeach;
		}
		else {?>
			<p>Veuillez sélectionner une catégorie de livres.</p>
		<?php } ?>
		<hr/>
		<?php if ($livres != '' && sizeof($livres)>0)
		{	
			foreach($livres as $livre): ?>
			<a href="<?php echo "index.php?a=viewFiche&e=posts&livresId=".$livre['id']; ?>"><img src="<?php echo $livre['vignette'];?>"/></a>
			<?php endforeach;
		}
		else{
			if($oGenreId != ''){?>
			<p>Pas de livre encodé pour cette sélection</p>
			<?php }} ?>		
	</div>
</div>
