<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Bibliotheque</title>
	<link rel="stylesheet" type="text/css" href="./css/style01.css">
</head>
<body>
	<div class="enTete">
		<h1 class="titrePrinc">Online<span>BOOK</span></h1>
		<form action="rech" class="formRecherche">
            <input class="champ" type="text" name="rech"value=" Search..."/>                         
        </form>
	</div>
	<?php include($data['view']); ?>

</body>
</html>