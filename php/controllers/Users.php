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
}