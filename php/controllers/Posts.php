<?php
namespace Controllers;
use Models\Posts as PostModel;
class Posts extends Base
{
	private $postsModel= null;
	public function __construct()
	{
		$this->postsModel=new PostModel();
	}
	public function index()
	{
		$data= [];
		$data['data']= $this->postsModel->getLivresMois();
		$data['view']= 'vue_accueil.php';
		return $data;
	}
	public function addbook()
	{

		$data= [];
		$data['data']= $this->postsModel->getCategories();
		$data['data02']= $this->postsModel->getEdition();
		$data['data03']= $this->postsModel->getEmplacement();
		if (!isset($_SESSION['id'])) 
		{
			$data['data04']='';
		}
		else
		{
			$data['data04']= $this->postsModel->getlivreshistory($_SESSION['id']);
		}
		$data['view']= 'collect_ajouter.php';
		return $data;
	}
	
	public function viewGenre()
	{
		$_SESSION['indice_livre']=1;
		$data= [];
		$data['data']= $this->postsModel->getCategories();
		
		if (!isset($_REQUEST['genreId'])) {
			$data['data02']='';
			$data['data03']='';
		}
		else{
			$genreId=$_GET['genreId'];
			$data['data02']= $this->postsModel->getlivresCateg($genreId);
			$data['data03']=$this->postsModel->getGenreLibel($genreId);
		}

		$data['view']= 'vue_genres.php';
		return $data;
	}
		public function update(){
		if (!isset($_REQUEST['livreId']))
		{
			die('On dirait que vous avez oublier de préciser quel livre vous voulez modifier');
		}
		if (!isset($_GET['livreId']))
		{
			die('vous avez oublier de dire quel livre doit se voir');
		}
		if (!is_numeric($_GET['livreId']))
		{
			die('l id fourni devrait être un nombre');
		}
		$id=$_GET['livreId'];
		$data= [];
		$data['data']= $this->postsModel->getCategories();
		$data['data02']= $this->postsModel->getEdition();
		$data['data03']= $this->postsModel->getEmplacement();
		$data['data04']=  $this->postsModel->getlivreFiche($id);
		$data['view']='update_book.php';
		$_SESSION['indice_livre'] = 1;
		return $data;
	}
	public function updateLivre(){
		if (!isset($_REQUEST['livreId']))
		{
			die('On dirait que vous avez oublier de préciser quel livre vous voulez modifier');
		}
		if (!isset($_GET['livreId']))
		{
			die('vous avez oublier de dire quel livre doit se modifier');
		}
		if (!is_numeric($_GET['livreId']))
		{
			die('l id fourni devrait être un nombre');
		}
		$id=$_GET['id'];

		$body = $_POST['body'];
		$category = $_POST['category'];
		$errors = [];
		if(empty($body))
		{
			$errors['body'] = true;
		}
		if(empty($category))
		{
			$errors['category'] = true;
		}
		if(count($errors) === 0)
		{
			$data['data']= $this->postsModel->updateMessage($id, $body, $category);
			$data=[];
			$data['data']= $this->postsModel->getMessages();
			$data['view']='view_posts.php';
			return $data;
		}
	}
	public function deleteLivre(){
		if (!isset($_REQUEST['livreId']))
		{
			die('On dirait que vous avez oublier de préciser quel livre vous voulez supprimer');
		}
		if (!isset($_GET['livreId']))
		{
			die('vous avez oublier de dire quel livre doit se supprimer');
		}
		if (!is_numeric($_GET['livreId']))
		{
			die('l id fourni devrait être un nombre');
		}
		$id=$_GET['livreId'];
		$data=[];
		$data['data']= $this->postsModel->getlivreFiche($id);
		$data['view']='ConfirmDelete.php';
		return $data;
	}
	public function ConfirmDelete(){
		if (!isset($_REQUEST['id']))
		{
			die('On dirait que vous avez oublier de préciser quel livre vous voulez modifier');
		}
		if (!isset($_GET['id']))
		{
			die('vous avez oublier de dire quel livre doit se voir');
		}
		if (!is_numeric($_GET['id']))
		{
			die('l id fourni devrait être un nombre');
		}
		if (isset($_POST['YESdelete'])) 
		{
	 		$id=$_GET['id'];
			$data=[];
			$data['data']= $this->postsModel->deleteLivre($id);
			$data=[];
	 	}

		$data= [];
		$data['data']= $this->postsModel->getCategories();
		$data['data02']= $this->postsModel->getEdition();
		$data['data03']= $this->postsModel->getEmplacement();
		$data['data04']=  $this->postsModel->getlivreshistory($_SESSION['id']);
		$data['view']='collect_ajouter.php';
		$_SESSION['indice_livre'] = 1;
		return $data;
	}
	public function viewEditions()
	{
		$_SESSION['indice_livre']=1;
		$data= [];
		$data['data']= $this->postsModel->getEdition();
		
		if (!isset($_REQUEST['editionId'])) {
			$data['data02']='';
			$data['data03']='';
		}
		else{
			$editionId=$_GET['editionId'];
			$data['data02']= $this->postsModel->getlivresEditions($editionId);
			$data['data03']=$this->postsModel->getEditionLibel($editionId);
		}

		$data['view']= 'vue_editions.php';
		return $data;
	}
	public function viewEmplacement()
	{
		$_SESSION['indice_livre']=1;
		$data= [];
		$data['data']= $this->postsModel->getEmplacement();
		
		if (!isset($_REQUEST['emplacementId'])) {
			$data['data02']='';
			$data['data03']='';
		}
		else{
			$emplacementId=$_GET['emplacementId'];
			$data['data02']= $this->postsModel->getlivresEmplacement($emplacementId);
			$data['data03']=$this->postsModel->getEmplacementLibel($emplacementId);
		}

		$data['view']= 'vue_emplacement.php';
		return $data;
	}
	public function viewAuteurs()
	{
		$_SESSION['indice_livre']=1;
		$data= [];
		$data['data']= $this->postsModel->getAuteurs();
		
		if (!isset($_REQUEST['auteursId'])) {
			$data['data02']='';
			$data['data03']='';
		}
		else{
			$emplacementId=$_GET['auteursId'];
			$data['data02']= $this->postsModel->getlivresAuteurs($emplacementId);
			$data['data03']=$emplacementId;
		}

		$data['view']= 'vue_auteurs.php';
		return $data;
	}
		public function viewFiche()
	{

		$data= [];
				
		if (!isset($_REQUEST['livresId'])) {
			die("on dirait que vous avez omis de renseigner l'id du livre");
		}
		else{
			$livresId=$_GET['livresId'];
			$data['data']= $this->postsModel->getlivreFiche($livresId);
			
		}

		$data['view']= 'vue_fiche.php';
		return $data;
	}
		public function viewAnneeEdition()
	{
		$_SESSION['indice_livre']=1;
		$data= [];
		if (!isset($_REQUEST['anneeId'])) {
			die("on dirait que vous avez omis de renseigner l'du année 'édition du livre");
		}
		else{
			$livresId=$_GET['anneeId'];
			$data['data']= $this->postsModel->getlivresDateEdit($livresId);
			
		}

		$data['view']= 'vue_annee.php';
		return $data;
	}
	   public function ajouter()
   {
   		if(isset($_POST['Ajouter']))
		{ 	
			$titre = $_POST['titre'];
			$auteur = $_POST['auteur'];
			$genre = $_POST['genre'];
			$emplacement = $_POST['emplacement'];
			$edition = $_POST['edition'];
			$annee_edition = $_POST['annee_ed'];
			$resume = $_POST['resume'];
			$encodeur = $_SESSION['id'];
			$errors = [];

			if(empty($titre)) 
			{
				$errors['titre'] = true;
			}
		
			if(empty($auteur))
			{
				$errors['auteur'] = true;
			}
		
		
			if(empty($genre))
			{
				$errors['genre'] = true;
			}
			if(empty($annee_edition))
			{
				$errors['annee_edition'] = true;
			}
			if(empty($resume))
			{
				$errors['resume'] = true;
			}
			if(empty($emplacement))
			{
				$errors['emplacement'] = true;
			}
			if(empty($edition))
			{
				$errors['edition'] = true;
			}
			if(is_numeric($annee_edition)== false)
			{
				$errors['annee_edition'] = true;
			}
			if(count($errors) === 0)
			{
				
				if (isset($_FILES['monfichier']))
				{
					$fichier=$_FILES['monfichier'];
					if ($fichier['error']!=0)
					{
						switch ($fichier['error'])
						{
							case UPLOAD_ERR_FORM_SIZE:
							die('ficher trop gros');
							break;
						default:
						die('Une erreur inconnue produite');
						}
					}
					else
					{
						$nameParts=explode(".",$fichier['name']);
						$ext =strtolower(end($nameParts)) ;
						$path2='img/iconesLivres/i'.base_convert(rand(0,time()),10,36).'.'.$ext;
					
						if (!@move_uploaded_file($fichier['tmp_name'],$path2))
						{
							die("Un problème s'est posé lors de la création du fichier");
						}

						list($width, $height) = getimagesize($path2);
						$new_width = 128;
						$new_height = 198;
						$image_dest = imagecreatetruecolor($new_width, $new_height);
						
						if ($ext=='jpg'||$ext=='jpeg')
						{
						$image_src = imagecreatefromjpeg($path2);
						}
						elseif ($ext=='png')
						{
							$image_src = imagecreatefromjpeg($path2);
						}
					}

					imagecopyresampled($image_dest,$image_src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
					imagejpeg($image_dest,$path2, 100);
				}

				$creation=$this->postsModel->createLivre($titre, $auteur, $annee_edition, $genre, $emplacement, $edition, $resume, $path2 ,$encodeur);
				$titre = NULL;
				$auteur = NULL;
				$genre = NULL;
				$emplacement = NULL;
				$edition = NULL;
				$resume = NULL;
				$annee_edition = NULL;
				$encodeur = NULL;
				$vignette = NULL;
				$data= [];
				$data['data']= $this->postsModel->getCategories();
				$data['data02']= $this->postsModel->getEdition();
				$data['data03']= $this->postsModel->getEmplacement();
				$data['data04']=  $this->postsModel->getlivreshistory($_SESSION['id']);
				$data['view']='collect_ajouter.php';
				$_SESSION['indice_livre'] = 1;
				return $data;
			}
		}
    }
    public function modifier()
   {

   		if(isset($_POST['Modifier']))
		{ 	
			$livreid = $_POST['id'];
			$titre = $_POST['titre'];
			$auteur = $_POST['auteur'];
			$genre = $_POST['genre'];
			$emplacement = $_POST['emplacement'];
			$edition = $_POST['edition'];
			$annee_edition = $_POST['annee_ed'];
			$resume = $_POST['resume'];
			$encodeur = $_SESSION['id'];
			$errors = [];

			if(empty($titre)) 
			{
				$errors['titre'] = true;
			}
		
			if(empty($auteur))
			{
				$errors['auteur'] = true;
			}
		
		
			if(empty($genre))
			{
				$errors['genre'] = true;
			}
			if(empty($annee_edition))
			{
				$errors['annee_edition'] = true;
			}
			if(empty($resume))
			{
				$errors['resume'] = true;
			}
			if(empty($emplacement))
			{
				$errors['emplacement'] = true;
			}
			if(empty($edition))
			{
				$errors['edition'] = true;
			}
			if(is_numeric($annee_edition)== false)
			{
				$errors['annee_edition'] = true;
			}
			if(count($errors) === 0)
			{
				
				if (isset($_FILES['monfichier']))
				{
					$fichier=$_FILES['monfichier'];

					if ($fichier['error']!=4)
					{	
						if ($fichier['error']!=0)
						{
							switch ($fichier['error'])
							{
								case UPLOAD_ERR_FORM_SIZE:
								die('ficher trop gros');
								break;
							default:
							die('Une erreur inconnue produite');
							}
						}
						else
						{
							$nameParts=explode(".",$fichier['name']);
							$ext =strtolower(end($nameParts)) ;
							$path2='img/iconesLivres/i'.base_convert(rand(0,time()),10,36).'.'.$ext;
				
							if (!@move_uploaded_file($fichier['tmp_name'],$path2))
							{
								die("Un problème s'est posé lors de la création du fichier");
							}
		
							list($width, $height) = getimagesize($path2);
							$new_width = 128;
							$new_height = 198;
							$image_dest = imagecreatetruecolor($new_width, $new_height);
							if ($ext=='jpg'||$ext=='jpeg')
							{
								$image_src = imagecreatefromjpeg($path2);
							}
							elseif ($ext=='png')
							{
								$image_src = imagecreatefromjpeg($path2);
							}
						}
						imagecopyresampled($image_dest,$image_src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
						imagejpeg($image_dest,$path2, 100);
						$this->postsModel->updateLivre($livreid, $titre, $auteur, $annee_edition, $genre, $emplacement, $edition, $resume, $path2 ,$encodeur);
					}
					else
					{
						$this->postsModel->updateLivrewithoutimg($livreid, $titre, $auteur, $annee_edition, $genre, $emplacement, $edition, $resume,$encodeur);
					}
				}
				
				$titre = NULL;
				$auteur = NULL;
				$genre = NULL;
				$emplacement = NULL;
				$edition = NULL;
				$resume = NULL;
				$annee_edition = NULL;
				$encodeur = NULL;
				$vignette = NULL;
				$_SESSION['indice_livre'] = 1;
				$data= [];
				$data['data']= $this->postsModel->getCategories();
				$data['data02']= $this->postsModel->getEdition();
				$data['data03']= $this->postsModel->getEmplacement();
				$data['data04']=  $this->postsModel->getlivreshistory($_SESSION['id']);
				$data['view']='collect_ajouter.php';
				$_SESSION['indice_livre'] = 1;
				return $data;
			}
		}
    }
}