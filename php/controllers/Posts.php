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
		}
		else{
			$genreId=$_GET['genreId'];
			$data['data02']= $this->postsModel->getlivresCateg($genreId);
		}

		$data['view']= 'vue_genres.php';
		return $data;
	}
}