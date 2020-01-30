<?php
include_once 'database.php';
include_once('validacoes.php');
include_once('crud.php');

class Likes extends Database
{
    public function __construct()
	{
		parent::__construct(); //Executa o método construtor da classe Pai (Database)
    }
    
    public function like()
    {
        $crud = new Crud();        

        $query = "SELECT * FROM posts";
        $result = $crud->getDados($query);   
        
        return $result;

    }
}