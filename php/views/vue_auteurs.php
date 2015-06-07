<?php 
$auteursList = $data['data'];
$livres = $data['data02'];
$oAuteurId=$data['data03'];
?>
	<div class="menuLongeur">
		<div class="menuPrinc">
			<ul>
				<li><a href="index.php" class="passif">Accueil</a></li>
				<li><a href="index.php?a=viewAuteurs&e=posts" class="actif">Auteurs</a></li>
				<li><a href="index.php?a=viewEditions&e=posts" class="passif">Edition</a></li>
				<li><a href="index.php?a=viewGenre&e=posts" class="passif">Genre</a></li>
				<li><a href="index.php?a=viewEmplacement&e=posts" class="passif">Emplacement</a></li>
				<li><a href="index.php?a=collect&e=users"class="passif">Profil</a></li>
			</ul>
		</div>
	</div>
	<div class="menu2">
		<ul>
			<?php foreach($auteursList as $auteur): ?>
				<li><a href="<?php echo "index.php?a=viewAuteurs&e=posts&auteursId=".$auteur['auteur']; ?>"><?php echo $auteur['auteur'];?></a></li>
			<?php endforeach; ?>	
		</ul>
	</div>
	<div class="contener">
		<div class="divPrinc">
	<h2>Auteurs :</h2>
	<?php if($oAuteurId != ''){ ?>
			<p><?php echo $oAuteurId;?></p>
	<?php  }
	 else {?>
	<p>Veuillez sélectionner un auteur.</p>
	<?php } ?>
<hr/>

		<?php 
		if ($livres != '')
		{
			foreach($livres as $livre): ?>
		<a href="<?php echo "index.php?a=viewFiche&e=posts&livresId=".$livre['id']; ?>"><img src="<?php echo $livre['vignette'];?>"/></a>
			<?php endforeach; } ?>	
</div>
	</div>
