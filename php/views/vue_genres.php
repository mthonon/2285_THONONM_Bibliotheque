<?php 
$categorieList = $data['data'];
$livres = $data['data02'];
?>
	<div class="menuLongeur">
		<div class="menuPrinc">
			<ul>
				<li><a href="index.php" class="passif">Accueil</a></li>
				<li><a href="auteurs.html" class="passif">Auteurs</a></li>
				<li><a href="edition.html"class="passif">Edition</a></li>
				<li><a href="genre.html"class="actif">Genre</a></li>
				<li><a href="emplacement.html"class="passif">Emplacement</a></li>
				<li><a href="index.php?varAccesPage=connection"class="passif">Profil</a></li>
			</ul>
		</div>
	</div>
	<div class="menu02Genre">
		<ul>
			<?php foreach($categorieList as $genre): ?>
				<li><a href="<?php echo "index.php?a=viewGenre&e=posts&genreId=".$genre['id']; ?>"><?php echo $genre['genre'];?></a></li>
			<?php endforeach; ?>	
		</ul>
	</div>
	<div class="contener">
		<div class="divPrinc">
	<h2>Genres :</h2>
		<p id="a"><?php echo $genre['genre'];?> </p>
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
