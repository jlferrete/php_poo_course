<?php 
class MyProfile
{

    public $email;

    public function __construct()
    {

    }
}

$intsMyProfile = new MyProfile;

$intsMyProfile->email = 'bernardo@correo.com';

echo $instMyProfile->email;