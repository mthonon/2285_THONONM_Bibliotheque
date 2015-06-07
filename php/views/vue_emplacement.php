<?php 
$emplacementList = $data['data'];
$livres = $data['data02'];
$oEmplacementId=$data['data03'];
?>
<div class="menuLongeur">
	<div class="menuPrinc">
		<ul>
			<li><a href="index.php" class="passif">Accueil</a></li>
			<li><a href="index.php?a=viewAuteurs&e=posts" class="passif">Auteurs</a></li>
			<li><a href="index.php?a=viewEditions&e=posts" class="passif">Edition</a></li>
			<li><a href="index.php?a=viewGenre&e=posts" class="passif">Genre</a></li>
			<li><a href="index.php?a=viewEmplacement&e=posts" class="actif">Emplacement</a></li>
			<li><a href="index.php?a=collect&e=users"class="passif">Profil</a></li>
		</ul>
	</div>
</div>
<div class="menu2">
	<ul>
		<?php foreach($emplacementList as $emplacement): ?>
			<li><a href="<?php echo "index.php?a=viewEmplacement&e=posts&emplacementId=".$emplacement['id']; ?>"><?php echo $emplacement['emplacement'];?></a></li>
		<?php endforeach; ?>	
	</ul>
</div>
<div class="contener">
	<div class="divPrinc">
		<h2>Emplacement:</h2>
		<?php if($oEmplacementId != ''){ 
			foreach($oEmplacementId as $emplacementLibelle): ?>
				<p><?php echo $emplacementLibelle['emplacement'];?></p>
			<?php endforeach;
		 }
		else {?>
			<p>Veuillez sélectionner un emplacement.</p>
		<?php } ?>
		<hr/>
		<?php if ($livres != '' && sizeof($livres)>0)
		{	
			foreach($livres as $livre): ?>
				<a href="<?php echo "index.php?a=viewFiche&e=posts&livresId=".$livre['id']; ?>"><img src="<?php echo $livre['vignette'];?>"/></a>
			<?php endforeach;
		}
		else{
			if($oEmplacementId != ''){?>
				<p>Pas de livre encodé pour cette sélection</p>
			<?php }
		}?>	
	</div>
</div>
