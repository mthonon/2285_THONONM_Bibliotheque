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
	<div class="contener">
		<div class="divPrinc">
			<?php foreach($livres as $livre): ?>
			<p>Année : <?php echo $livre['annee_edit']?></p>
		<hr/>
		<?php endforeach;?>
			
	<?php if ($livres != '' && sizeof($livres)>0)
		{	
			foreach($livres as $livre): ?>
			<a href="<?php echo "index.php?a=viewFiche&e=posts&livresId=".$livre['id']; ?>"><img src="<?php echo $livre['vignette'];?>"/></a>
			<?php endforeach;
		}?>
</div>
	</div>
