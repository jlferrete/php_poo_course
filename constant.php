<?php 

class Config
{
    /* const DB_USER_NAME = 'bpineda';
    const DB_USER_PASSWORD = '12345678';
    const DB_DATABASE_NAME = 'mydb'; */
    const ENVIRONMENT = 'development';
}


class BaseProfile extends Config
{
    protected $connection_data = 'Conexion BD';
    protected function connect2DB()
    {
        if( 'production' == self::ENVIRONMENT )
        {
            echo 'Conectando a producción';
        }

        if( 'development' == self::ENVIRONMENT )
        {
            echo 'Conectando a desarrollo';
        }

        if( 'staging' == self::ENVIRONMENT )
        {
            echo 'Conectando a staging';
        }
    }
    public function __construct()
    {
        //$this->connect2DB();
        self::connect();
    }
}

class MyProfile extends BaseProfile
{
    const DOMAIN_NAME = 'bernardoredsocial.com';
    private $email = 'bernardo@correoc.com';
    public $name;
    public $last_name;

    public function __construct()
    {
        //echo "Conectando a ". self::DB_DATABASE_NAME;
        $this->connect2DB();
        //echo self::DOMAIN_NAME;
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

}

$instMyProfile = new MyProfile;

