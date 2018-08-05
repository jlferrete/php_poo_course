<?php

/* try
{
    throw new Exception('No existe archivo de configuracion');

}catch(Exception $e)
{
    echo "Se ha producido un error " . $e->getMessage() . "\n";
}finally
{
    echo "Cerrando BD";
} */

class DBException extends Exception{}

class Main
{
    public function __construct()
    {
        try
        {
            throw new DBException(" No hay conexion ");
            //throw new Exception("No hay espacio en memoria");
        
        }catch(DBException $e)
        {
            echo "Error especifico: " . $e->getMessage() . "\n";
        
        }catch(Exception $e)
        {
            echo "Error generico: " . $e->getMessage() . "\n";
        }
        
    }
}

$main = new Main;
