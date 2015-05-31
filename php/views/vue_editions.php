<?php 
$editionsList = $data['data'];
$livres = $data['data02'];
$oEditionId=$data['data03'];
?>
	<div class="menuLongeur">
		<div class="menuPrinc">
			<ul>
				<li><a href="index.php" class="passif">Accueil</a></li>
				<li><a href="index.php?a=viewAuteurs&e=posts" class="passif">Auteurs</a></li>
				<li><a href="index.php?a=viewEditions&e=posts" class="actif">Edition</a></li>
				<li><a href="index.php?a=viewGenre&e=posts" class="passif">Genre</a></li>
				<li><a href="index.php?a=viewEmplacement&e=posts" class="passif">Emplacement</a></li>
				<li><a href="index.php?varAccesPage=connection"class="passif">Profil</a></li>
			</ul>
		</div>
	</div>
	<div class="menu02Genre">
		<ul>
			<?php foreach($editionsList as $editions): ?>
				<li><a href="<?php echo "index.php?a=viewEditions&e=posts&editionId=".$editions['id']; ?>"><?php echo $editions['maison'];?></a></li>
			<?php endforeach; ?>	
		</ul>
	</div>
	<div class="contener">
		<div class="divPrinc">
	<h2>Genres :</h2>
		<?php if($oEditionId != ''){ 
		foreach($oEditionId as $editionLibelle): ?>
			<p><?php echo $editionLibelle['maison'];?></p>
		<?php endforeach;
		
 }
	 else {?>
	<p>Veuillez sélectionner une maison d'édition.</p>
	<?php } ?>
<hr/>
	<?php if ($livres != '' && sizeof($livres)>0)
		{	
			foreach($livres as $livre): ?>
				<a href="<?php echo "index.php?a=viewFiche&e=posts&livresId=".$livre['id']; ?>"><img src="<?php echo $livre['vignette'];?>"/></a>
			<?php endforeach;
		}
		else{
			if($oEditionId != ''){?>
			<p>Pas de livre encodé pour cette sélection</p>
			<?php }} ?>	
</div>
	</div>
