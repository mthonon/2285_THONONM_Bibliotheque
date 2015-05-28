<?php
namespace Models;
class Posts extends Model
{
	/*public public function nomFonc(){
		
	}*/
	public function getlivres($dbConnexion) {
	$sql = 'SELECT * 
			FROM livres  
			ORDER BY livres.`date_create` DESC';
	$res = $dbConnexion->query($sql);
	return $res->fetchAll();
	}
	public function getlivresMois() {
		$sql = 'SELECT livres.`id`,livres.`titre`, livres.`auteur`, livres.`annee_edit`, livres.`genre_id`, livres.`maison_edit_id`, livres.`emplacement_id`, livres.`date_create`, livres.`resume`, livres.`vignette`, categories.`genre` as nom_categorie,  emplacement.`emplacement` as nom_emplacement, edition.`maison` as nom_maisonEdit
				FROM livres  
				JOIN categories ON categories.`id`= livres.`genre_id`
				JOIN edition ON edition.`id`= livres.`maison_edit_id`
				JOIN emplacement ON emplacement.`id`= livres.`emplacement_id`
				ORDER BY livres.`id` DESC
				LIMIT 6';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getlivresCateg($wheresql) {
		$sql = "SELECT livres.`id`,livres.`titre`, livres.`auteur`, livres.`annee_edit`, livres.`genre_id`, livres.`maison_edit_id`, livres.`emplacement_id`, livres.`date_create`, livres.`resume`, livres.`vignette`, categories.`genre` as nom_categorie,  emplacement.`emplacement` as nom_emplacement, edition.`maison` as nom_maisonEdit 
				FROM livres 
				JOIN categories ON categories.`id`= livres.`genre_id`
				JOIN edition ON edition.`id`= livres.`maison_edit_id`
				JOIN emplacement ON emplacement.`id`= livres.`emplacement_id`
				WHERE livres.`genre_id` =".$wheresql.' ORDER BY livres.`date_create` DESC';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getlivresEditions($wheresql) {
		$sql = "SELECT livres.`id`,livres.`titre`, livres.`auteur`, livres.`annee_edit`, livres.`genre_id`, livres.`maison_edit_id`, livres.`emplacement_id`, livres.`date_create`, livres.`resume`, livres.`vignette`, categories.`genre` as nom_categorie,  emplacement.`emplacement` as nom_emplacement, edition.`maison` as nom_maisonEdit 
				FROM livres 
				JOIN categories ON categories.`id`= livres.`genre_id`
				JOIN edition ON edition.`id`= livres.`maison_edit_id`
				JOIN emplacement ON emplacement.`id`= livres.`emplacement_id`
				WHERE livres.`maison_edit_id` =".$wheresql.' ORDER BY livres.`date_create` DESC';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getlivresEmplacement($wheresql) {
		$sql = "SELECT livres.`id`,livres.`titre`, livres.`auteur`, livres.`annee_edit`, livres.`genre_id`, livres.`maison_edit_id`, livres.`emplacement_id`, livres.`date_create`, livres.`resume`, livres.`vignette`, categories.`genre` as nom_categorie,  emplacement.`emplacement` as nom_emplacement, edition.`maison` as nom_maisonEdit 
				FROM livres 
				JOIN categories ON categories.`id`= livres.`genre_id`
				JOIN edition ON edition.`id`= livres.`maison_edit_id`
				JOIN emplacement ON emplacement.`id`= livres.`emplacement_id`
				WHERE livres.`emplacement_id` =".$wheresql.' ORDER BY livres.`date_create` DESC';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getlivresAuteurs($wheresql) {
		$sql = "SELECT livres.`id`,livres.`titre`, livres.`auteur`, livres.`annee_edit`, livres.`genre_id`, livres.`maison_edit_id`, livres.`emplacement_id`, livres.`date_create`, livres.`resume`, livres.`vignette`, categories.`genre` as nom_categorie,  emplacement.`emplacement` as nom_emplacement, edition.`maison` as nom_maisonEdit 
				FROM livres 
				JOIN categories ON categories.`id`= livres.`genre_id`
				JOIN edition ON edition.`id`= livres.`maison_edit_id`
				JOIN emplacement ON emplacement.`id`= livres.`emplacement_id`
				WHERE livres.`auteur` =".$wheresql.' ORDER BY livres.`date_create` DESC';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getlogin($dbConnexion, $email, $password){
		$sql = "SELECT users.`id`,users.`email`, users.`password`
				FROM users
				WHERE users.`email` = '".$email. "' AND users.`password` = '".$password."'";
		$res = $dbConnexion->query($sql);
		return $res->fetchAll();
	}

	public function createLivre($dbConnexion, $titre, $auteur, $annee_edition, $genre, $emplacement, $maison_edition, $resume, $path2 ) {
		$sql = 'INSERT INTO livres (titre, auteur, annee_edit, genre_id, emplacement_id, maison_edit_id, resume, vignette) VALUES(:titre, :auteur, :annee_edition, :genre, :emplacement, :maison_edition, :resume, :path2)';
		try{
			$res = $dbConnexion->prepare($sql);
			$res->execute([':titre' => $titre, ':auteur' => $auteur, ':annee_edition' => $annee_edition, ':genre' => $genre, ':emplacement' => $emplacement, ':maison_edition' => $maison_edition, ':resume' => $resume, ':path2'=> $path2]);
			} catch(PDOException $e) {
			die($e->getMessage());
		}
		$titre="";
		$auteur="";
		$annee_edition="";
		$genre="";
		$emplacement="";
		$maison_edition="";
		$resume="";
	}
	public function createCompte($dbConnexion, $user, $motDP) {
		$sql = 'INSERT INTO users (email, password) VALUES(:user, :motDP)';
		try{
			$res = $dbConnexion->prepare($sql);
			$res->execute([':user' => $user, ':motDP' => $motDP]);
		} catch(PDOException $e) {
			die($e->getMessage());
		}
		$user="";
		$motDP="";
	}


	public function deleteLivre($dbConnexion, $messageId) {
		$sql = "DELETE FROM livres WHERE livres.`id` = ".$messageId;
		$res = $dbConnexion->query($sql);
		return;
	}

	public function updateMessage($dbConnexion, $messageId, $body, $category) {
		$sql = 'UPDATE livres SET livres.`body` = "'.$body.'", livres.`category` = "'.$category.'" WHERE livres.`id` = '.$messageId;
		$res = $dbConnexion->query($sql);
		return;
	}

	public function getCategories(){
		$sql = 'SELECT categories.`id`, categories.`genre` FROM categories ORDER BY categories.`genre`';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getEdition(){
		$sql = 'SELECT edition.`id`, edition.`maison` FROM edition ORDER BY edition.`maison`';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getEmplacement(){
		$sql = 'SELECT emplacement.`id`, emplacement.`emplacement` FROM emplacement ORDER BY emplacement.`emplacement`';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getAuteurs(){
		$sql = 'SELECT DISTINCT livres.`auteur` FROM livres ORDER BY livres.`auteur`';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}



	public function getlivresId($dbConnexion,$livreid) {
		$sql = "SELECT livres.`id`,livres.`titre`, livres.`auteur`, livres.`annee_edit`, livres.`genre_id`, livres.`maison_edit_id`, livres.`emplacement_id`, livres.`date_create`, livres.`résumé`, categories.`genre` as nom_categorie,  emplacement.`emplacement` as nom_emplacement, edition.`maison` as nom_maisonEdit
				FROM livres  
				JOIN categories ON categories.`id`= livres.`genre_id`
				JOIN edition ON edition.`id`= livres.`maison_edit_id`
				JOIN emplacement ON emplacement.`id`= livres.`emplacement_id` 
				WHERE livres.`id` =".$livreid;
		$res = $dbConnexion->query($sql);
		return $res->fetchAll();
	}

}