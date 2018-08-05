<?php 
class MyProfile
{

    private $email = "b@correo.com";
    public $name;
    public $last_name;

    public function __construct()
    {

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        //Reglas para la asignación de nuestro correo
        $this ->email = $email;
    }

    private function getDetails()
    {
        //
    }
}

$instMyProfile = new MyProfile;

//$intsMyProfile->email = 'bernardo@correo.com';

echo $instMyProfile->getEmail();