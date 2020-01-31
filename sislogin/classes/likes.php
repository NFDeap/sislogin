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
    
    public function posts()
    {        
        $crud = new Crud(); 

        $query = "SELECT * FROM posts";
        $result = $crud->getDados($query);   

        return $result;

    }

    public function like()
    {
        $crud = new Crud(); 
            // if user has clicked the like button
            if(isset($_POST['action'])) {
                $post_id = $_POST['post_id'];
                $action = $_POST['action'];
                $id_user = $_POST['id_user'];
    
                switch($action) {
                    case 'like':
                        $sql = "INSERT INTO rating_info (id_post, id_user, rating_action) 
                                VALUES($post_id, $id_user, '$action')
                                ON DUPLICATE KEY UPDATE rating_action='like'";
                        break;
                    case 'dislike':
                        $sql = "INSERT INTO rating_info (id_post, id_user, rating_action) 
                                VALUES($post_id, $id_user, '$action')
                                ON DUPLICATE KEY UPDATE rating_action='dislike'";
                        break;
                    case 'unlike':
                        $sql = "DELETE FROM rating_info WHERE id_user=$id_user AND id_post=$post_id";
                        break;
                    case 'undislike':
                        $sql = "DELETE FROM rating_info WHERE id_user=$id_user AND id_post=$post_id";
                        break;
                }
            }
            
            $like_result = $crud->executarSql($sql);
    }
}