<?php
//incluindo as classes necessárias
include_once("classes/crud.php");
//instanciando o objeto
$crud = new Crud();

header('Content-Type: text/html; charset=UTF-8');

if(empty($_SESSION)) {// Se a sessão ainda não foi iniciada
    session_start();
 }

if(isset($_POST['login']))
{
	$email = $_POST['email'];
    $senha = $_POST['senha'];
	
	//Selecionando os dados a partir do ID informado
    $resultado = $crud->getDados("SELECT id_usuario, email, senha, situacao, tipo FROM usuarios WHERE email='$email' AND situacao=1");         
    
    //Percorrendo os dados retornados    
	foreach ($resultado as $linha) {
		$senhacriptografada = $linha['senha'];	
        $id_usuario = $linha['id_usuario'];		
        $situacao = $linha['situacao'];
        $tipo = $linha['tipo'];
    }    
        if($situacao == '0'){
            echo "<SCRIPT> 
            alert('Usuário Desativado!');
            location.href = 'index.php';     
            </SCRIPT>";
        } else {	     
            if(password_verify($senha , $senhacriptografada)) {
                $_SESSION['emailUsuario'] = $_POST['email'];
                $_SESSION['id_usuario'] = $id_usuario;
                    if($tipo == 1){
                    header("Location: adminindex.php?id_usuario=$linha[id_usuario]");
                    $update = $crud->executarSql("UPDATE usuarios SET sessao=NOW() WHERE id_usuario=$id_usuario");
                    exit;
                    } elseif($tipo == 2) {
                        header("Location: userindex.php?id_usuario=$linha[id_usuario]");
                        $update = $crud->executarSql("UPDATE usuarios SET sessao=NOW() WHERE id_usuario=$id_usuario");
                        exit;
                    }
            } else {
                echo "<SCRIPT> 
                        alert('O usuário ou a senha informados são inválidos!');
                        location.href = 'index.php';     
                    </SCRIPT>";       	   
            }	
        }

        

}

?>

