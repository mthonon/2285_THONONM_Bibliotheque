<?php
namespace Models;
class Posts extends Model
{
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
	public function getlivreshistory($wheresql) {
		$sql = "SELECT livres.`id`,livres.`titre`, livres.`auteur`, livres.`annee_edit`, livres.`genre_id`, livres.`maison_edit_id`, livres.`emplacement_id`, livres.`date_create`, livres.`resume`, livres.`vignette`, categories.`genre` as nom_categorie,  emplacement.`emplacement` as nom_emplacement, edition.`maison` as nom_maisonEdit
				FROM livres  
				JOIN categories ON categories.`id`= livres.`genre_id`
				JOIN edition ON edition.`id`= livres.`maison_edit_id`
				JOIN emplacement ON emplacement.`id`= livres.`emplacement_id`
				WHERE livres.`encodeur_id` =".$wheresql.' ORDER BY livres.`date_create` DESC';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getlivreFiche($wheresql) {
		$sql = "SELECT livres.`id`,livres.`titre`, livres.`auteur`, livres.`annee_edit`, livres.`genre_id`, livres.`maison_edit_id`, livres.`emplacement_id`, livres.`date_create`, livres.`resume`, livres.`vignette`, categories.`genre` as nom_categorie,  emplacement.`emplacement` as nom_emplacement, edition.`maison` as nom_maisonEdit
				FROM livres  
				JOIN categories ON categories.`id`= livres.`genre_id`
				JOIN edition ON edition.`id`= livres.`maison_edit_id`
				JOIN emplacement ON emplacement.`id`= livres.`emplacement_id`
				WHERE livres.`id` =".$wheresql;
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
	public function getlivresDateEdit($wheresql) {
		$sql = "SELECT livres.`id`,livres.`titre`, livres.`auteur`, livres.`annee_edit`, livres.`genre_id`, livres.`maison_edit_id`, livres.`emplacement_id`, livres.`date_create`, livres.`resume`, livres.`vignette`, categories.`genre` as nom_categorie,  emplacement.`emplacement` as nom_emplacement, edition.`maison` as nom_maisonEdit 
				FROM livres 
				JOIN categories ON categories.`id`= livres.`genre_id`
				JOIN edition ON edition.`id`= livres.`maison_edit_id`
				JOIN emplacement ON emplacement.`id`= livres.`emplacement_id`
				WHERE livres.`annee_edit` =".$wheresql.' ORDER BY livres.`date_create` DESC';
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
				WHERE livres.`auteur` ='".$wheresql."'".' ORDER BY livres.`date_create` DESC';
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getlogin($email, $password){
		$sql = "SELECT users.`id`,users.`email`, users.`password`
				FROM users
				WHERE users.`email` = '".$email. "' AND users.`password` = '".$password."'";
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}

	public function deleteLivre($messageId) {
		$sql = "DELETE FROM livres WHERE livres.`id` = ".$messageId;
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
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
	public function getEmplacementLibel($wheresql){
		$sql = "SELECT emplacement.`emplacement` FROM emplacement
				WHERE emplacement.`id` =".$wheresql;
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getGenreLibel($wheresql){
		$sql = "SELECT categories.`genre` FROM categories
				WHERE categories.`id` =".$wheresql;
		$pdost=$this-> connexion->query($sql);
		$pdost->execute();
		return $pdost->fetchAll();
	}
	public function getEditionLibel($wheresql){
		$sql = "SELECT edition.`maison` FROM edition
				WHERE edition.`id` =".$wheresql;
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
	public function createLivre($titre, $auteur, $annee_edition, $genre, $emplacement, $maison_edition, $resume, $vignette, $encodeur ) 
    {
        $sql = 'INSERT INTO livres (titre, auteur, annee_edit, genre_id, emplacement_id, maison_edit_id, resume, vignette, encodeur_id) VALUES(:titre, :auteur, :annee_edition, :genre, :emplacement, :maison_edition, :resume, :vignette, :encodeur)';
        try
        {
            $pdost = $this->connexion->prepare($sql);
            $pdost->execute([':titre' => $titre, ':auteur' => $auteur, ':annee_edition' => $annee_edition, ':genre' => $genre, ':emplacement' => $emplacement, ':maison_edition' => $maison_edition, ':resume' => $resume, ':vignette'=> $vignette, ':encodeur'=> $encodeur ]);
            return true;
        } 
        catch(PDOException $e) 
        {
            return false;
        }
    }
    public function updateLivre($livreid, $titre, $auteur, $annee_edition, $genre, $emplacement, $maison_edition, $resume, $vignette, $encodeur ) 
    {
        $sql = 'UPDATE livres SET titre = "'.$titre.'", auteur = "'.$auteur.'", annee_edit = '.$annee_edition.', genre_id = '.$genre.', emplacement_id = '.$emplacement.', maison_edit_id = '.$maison_edition.', resume = "'.$resume.'", vignette = "'.$vignette.'", encodeur_id = '.$encodeur.' WHERE id = '.$livreid;
        $pdost=$this-> connexion->query($sql);
        $pdost->execute();
        return;
    }
    public function updateLivrewithoutimg($livreid, $titre, $auteur, $annee_edition, $genre, $emplacement, $maison_edition, $resume,  $encodeur ) 
    {
        $sql = 'UPDATE livres SET titre = "'.$titre.'", auteur = "'.$auteur.'", annee_edit = '.$annee_edition.', genre_id = '.$genre.', emplacement_id = '.$emplacement.', maison_edit_id = '.$maison_edition.', resume = "'.$resume.'", encodeur_id = '.$encodeur.' WHERE id = '.$livreid;
        $pdost=$this-> connexion->query($sql);
        $pdost->execute();
        return;
    }

}

