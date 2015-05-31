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
	public function viewGenre()
	{

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
	public function viewEditions()
	{

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
}