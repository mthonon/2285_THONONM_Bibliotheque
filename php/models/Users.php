<?php
namespace Models;
class Users extends Model 
{
	public function getUser($email,$password)
    {
        $sql = 'SELECT * FROM users WHERE email=:email AND password=:password';
        $pdost = $this->connexion->prepare($sql);
        $pdost->execute([':email'=>$email,':password'=>$password]);
        return $pdost->fetch();
    }
    public function getLogin($email, $password)
    {	
        $sql = "SELECT users.`id`,users.`email`, users.`password`
		      FROM users
			 WHERE users.`email` = '".$email. "' AND users.`password` = '".$password."'";
        $pdost = $this->connexion->prepare($sql);
        $pdost->execute([':email'=>$email,':password'=>$password]);
        return $pdost->fetch();
	}
    public function createCompte($user, $motDP) {
        $sql = 'INSERT INTO users (email, password) VALUES(:user, :motDP)';
        try
        {
            $pdost = $this->connexion->prepare($sql);
            $pdost->execute([':user' => $user, ':motDP' => $motDP]);
            $user="";
            $motDP="";
            return true;
        }
        catch(PDOException $e) 
        {
            return false;
        }
        
    }
}