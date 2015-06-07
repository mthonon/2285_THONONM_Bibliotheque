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
	<?php if (isset($_SESSION ['user'])&& $_SESSION ['connected'] == 1) {?>
		<li><a href="index.php?a=disconnect&e=users"class="passif">Déconnection</a></li>
		<?php header('Location: index.php?a=addBook&e=posts');} else { ?>			
		<div class="inscript">
			<h1>Connectez-vous:</h1>
			<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<label for="adresseElect">Adresse électronique :</label>
				<input type="text" id="adresseElect" name="adresseElect"/>
				<label for="password">Mot de passe :</label>
				<input type="password" id="password" name="password"/>
				<div>
        			<input name="a"
         	      			type="hidden"
          	     			value="check">
        			<input name="e"
        			        type="hidden"
          	 		        value="users">
				</div>
				<input type="submit" value="Connexion" id="Connexion" class="Connexion"/>
			</form>
		</div>
		<div class="inscript">
			<h2>Pas encore inscript ?</h2>
			<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<label for="adresseElectInscrip">Adresse électronique :</label>
				<input type="text" id="adresseElectInscrip" name="adresseElectInscrip"/>
				<label for="password">Mot de passe :</label>
				<input type="password" id="password" name="password"/>
				<label for="password">Confirmation MDP :</label>
				<input type="password" id="confirmPassword" name="confirmPassword"/>
				<div>
        			<input name="a"
           					type="hidden"
           					value="create">
        			<input name="e"
            				type="hidden"
							value="users">
    			</div>
				<input type="submit" value="Envoyer" name="Envoyer" id="Envoyer" class="envoyer"/>
			</form>
		</div>
	<?php } ?>	
</div>
