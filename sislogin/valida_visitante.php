


<div class="geral">
<div class="container-fluid my-5">

<?php
//incluindo as classes necessárias
include_once("classes/crud.php");
include_once("classes/validacoes.php");
//instanciando o objeto
$crud = new Crud();
$validacoes = new Validacoes();

?>
<head>
<!-- Carregando o CSS do Bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Carregando a fonte Material Design para visualização dos ícones do Google Fonts -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-dark">

<?php

if(isset($_POST['salvarUsario'])) { 
        
    $nome_usuario = $crud->limpaTexto($_POST['nome_usuario']);		
    $cpf = $crud->limpaTexto($_POST['CPF']);			
    $email = $crud->limpaTexto($_POST['email']);
    $senha = $crud->limpaTexto($_POST['senha']);
    $confirma = $crud->limpaTexto($_POST['confirma']);

        
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT); //Criptografa a senha utilizando um hash aleatório	
        
    $msg = $validacoes->verifica_vazio($_POST, array('nome_usuario', 'email','senha'));	
    $verifica_email = $validacoes->e_email($email);
    $compara_senha = $validacoes->comparaSenha($senha, $confirma);
    
    if($msg != null) {
        echo $validacoes->mensagem('Ops! Ocorreram o(s) seguinte(s) problema(s):',$msg,'danger');
        echo $validacoes->botaoVoltar('Voltar','danger');
    } elseif (!$verifica_email) {
        echo $validacoes->mensagem('Ops!','O email informado é inválido!','danger');
        echo $validacoes->botaoVoltar('Voltar','danger');
    } elseif (!$compara_senha){
        echo $validacoes->mensagem('Ops!','A senha e a confirmação da senha informadas são diferentes!','danger');
        echo $validacoes->botaoVoltar('Voltar','danger');
    } else{	                
        //efetua o insert no SGBD	
        $insert = $crud->executarSql("INSERT INTO usuarios(nome_usuario, situacao, login, CPF, tipo, email, senha) VALUES('$nome_usuario', '1', 'Default','$cpf', '2','$email','$senhaCriptografada')");
        if($insert){//exibe a mensagem de sucesso		
            echo $validacoes->mensagem('Tudo Certo!','Registro <strong>inserido</strong> com sucesso','success');
            echo $validacoes->botao('Voltar para Login', 'success', 'index.php', 'reply');		        
            } 
    } 
} 


if(isset($_POST['alterarUsuario'])) { 		
    //efetua o update no SGBD	

    $id_usuario = $crud->limpaTexto($_POST['id_usuario']);		
    $nome_usuario = $crud->limpaTexto($_POST['nome_usuario']);		
    $cpf = $crud->limpaTexto($_POST['CPF']);			
    $email = $crud->limpaTexto($_POST['email']);
    $senha = $crud->limpaTexto($_POST['senha']);
    $confirma = $crud->limpaTexto($_POST['confirma']);

    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT); //Criptografa a senha utilizando um hash aleatório	
        
    $msg = $validacoes->verifica_vazio($_POST, array('nome_usuario', 'email','senha'));	
    $verifica_email = $validacoes->e_email($email);
    $compara_senha = $validacoes->comparaSenha($senha, $confirma);
    
    if($msg != null) {
        echo $validacoes->mensagem('Ops! Ocorreram o(s) seguinte(s) problema(s):',$msg,'danger');
        echo $validacoes->botaoVoltar('Voltar','danger');
    } elseif (!$verifica_email) {
        echo $validacoes->mensagem('Ops!','O email informado é inválido!','danger');
        echo $validacoes->botaoVoltar('Voltar','danger');
    } elseif (!$compara_senha){
        echo $validacoes->mensagem('Ops!','A senha e a confirmação da senha informadas são diferentes!','danger');
        echo $validacoes->botaoVoltar('Voltar','danger');
    } else{	                

    $update = $crud->executarSql("UPDATE usuarios SET nome_usuario='$nome_usuario', CPF='$cpf', email='$email', senha='$senhaCriptografada' WHERE id_usuario=$id_usuario");						
    if($update){//exibe a mensagem de sucesso		
        echo $validacoes->mensagem('Tudo Certo!','Registro <strong>Alterado</strong> com sucesso','success');
        /* echo $validacoes->botao('Voltar para a Listagem', 'success"', '#', 'reply'); */		
        echo "<a href=\"userindex.php?id_usuario=$id_usuario\" class='btn btn-success' title='Voltar ao Perfil'><i class='material-icons vertical-align-middle'>undo</i> Voltar ao Perfil</a>";
        }
    } 
}    

?>

</div>
</div>