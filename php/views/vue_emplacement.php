<?php 
$emplacementList = $data['data'];
$livres = $data['data02'];
?>
	<div class="menuLongeur">
		<div class="menuPrinc">
			<ul>
				<li><a href="index.php" class="passif">Accueil</a></li>
				<li><a href="index.php?a=viewAuteurs&e=posts" class="passif">Auteurs</a></li>
				<li><a href="index.php?a=viewEditions&e=posts" class="passif">Edition</a></li>
				<li><a href="index.php?a=viewGenre&e=posts" class="passif">Genre</a></li>
				<li><a href="index.php?a=viewEmplacement&e=posts" class="actif">Emplacement</a></li>
				<li><a href="index.php?varAccesPage=connection"class="passif">Profil</a></li>
			</ul>
		</div>
	</div>
	<div class="menu02Genre">
		<ul>
			<?php foreach($emplacementList as $emplacement): ?>
				<li><a href="<?php echo "index.php?a=viewEmplacement&e=posts&emplacementId=".$emplacement['id']; ?>"><?php echo $emplacement['emplacement'];?></a></li>
			<?php endforeach; ?>	
		</ul>
	</div>
	<div class="contener">
		<div class="divPrinc">
	<h2>Emplacement:</h2>
		<p id="a"><?php echo $emplacement['emplacement'];?> </p>
		<hr/>
		<?php 
		if ($livres != '')
		{
			foreach($livres as $livre): ?>
			<a href="#"><img src="<?php echo $livre['vignette'];?>"/></a>
			<?php endforeach; } ?>	
</div>
	</div>
	<div class="footer">
		<ul>
			<li>
				<div class="infos">
					<h4>Bibliothèque Oupeye <br/>(Dépos principal)</h4>
					<p> rue Roi Albert 194 <br/> 4680 OUPEYE</p>
					<p>Tél : 04/248.13.05</p>
				</div>
			</li>
			<li>
				<div class="infos">
					<h4>Bibliothèque Hermée <br/>(Dépos secondaire)</h4>
					<p> rue de Fexhe-Slins 18a  <br/> 4680 HERMÉE</p>
					<p>Tél :04/278.00.07</p>
				</div>
			</li>
			<li>
				<div class="infos">
					<h4>L'oiseau lire <br/>(collaborateur)</h4>
					<p> Rue du Collège 10 <br/> 4600 VISÉ </p>
					<p>Tél : 04/379.77.91</p>
				</div>
			</li>
			<img src="./img/facebook.png"> <img src="./img/twitter.png">
		</ul>
	</div>
