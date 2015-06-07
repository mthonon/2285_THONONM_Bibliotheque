<?php
namespace Controllers;

use Models\Users as UserModel;
class Users extends Base
{
	 private $userModel = null;

    function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function collect()
    {
    	$_SESSION['indice_livre']=1;
        return ['data' => null, 'view' => 'collect_user.php'];
    }
    public function check()
    {
    	$user= $_POST['adresseElect'];
		$motDP = $_POST['password'];
		$errors = [];
		if(empty($user)) 
		{
	  		$errors['user']= true;
		}
		if(empty($motDP))
		{
	  		$errors['motDP'] = true;
		}
		if(count($errors) === 0)
		{
	  		$login=$this->userModel->getLogin($user, sha1($motDP));
	  		if (empty($login)) 
	  		{
	     		echo "!!! Votre identifiant et/ou votre mot de passe est incorrecte !!!";
	     		return ['data' => null, 'view' => 'collect_user.php'];
	  		}
	  		else
	  		{
	     		$_SESSION['user'] = $login['email'];
	     		$_SESSION['id'] = $login['id'];
         		$_SESSION['connected'] = 1;
         		$_SESSION['indice_livre'] = 1;
         		header('Location: index.php?a=addBook&e=posts');
	  		}
	  		$user = NULL;
	  		$motDP = NULL; 
        }
        else
        {
        	echo "!!! Veuillez remplir tous les champs de la section choissie, Connectez-vous OU Inscrivez-vous !!!";
	     	return ['data' => null, 'view' => 'collect_user.php'];
        }
    }

    public function create()
    {
    	$user= $_POST['adresseElectInscrip'];
		$motDP = $_POST['password'];
		$confMotDP= $_POST['confirmPassword'];
		$errors = [];
		if(empty($user)) 
		{
			$errors['user']= true;
		}	
		if(empty($motDP))
		{
			$errors['motDP'] = true;
		}
		if(empty($confMotDP))
		{
			$errors['confMotDP'] = true;
		}
		if ($motDP != $confMotDP)
		{
			$errors['MDPDiff'] = true;
		}
		if(count($errors) === 0)
		{
			$creation=$this->userModel->createCompte($user, sha1($motDP));
			if ($creation === true)
			{
				$login=$this->userModel->getLogin($user, sha1($motDP));
	  			if (empty($login)) 
	  			{
	    			echo "Votre identifiant et/ou votre mot de passe est incorrecte";
	  			}
	  			else
	  			{
	    			$_SESSION['user'] = $login['email'];
	    			$_SESSION['id'] = $login['id'];
        			$_SESSION['connected'] = 1;
        			$_SESSION['indice_livre']= 1;
        			header('Location: index.php?a=addBook&e=posts');
	  			}	
			}
			$user = NULL;
			$motDP = NULL;
		}
		else{
			echo "!!! Veuillez remplir tous les champs de la section choissie, Connectez-vous OU Inscrivez-vous !!!";
	     	return ['data' => null, 'view' => 'collect_user.php'];
		}
    }
	public function disconnect()
	{
		session_destroy();
        unset($_SESSION ['user']);
        unset($_SESSION ['connected']);
        unset($_SESSION ['id']);
        header('Location: index.php?a=index&e=posts');
   }

}