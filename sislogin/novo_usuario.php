<?php
//incluindo as classes necessárias
include_once("classes/crud.php");
include_once("classes/validacoes.php");
//instanciando o objeto
$crud = new Crud();
$validacoes = new Validacoes();

?>


<!DOCTYPE html>

<html>

<head>

<!-- Carregando o CSS do Bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Carregando a fonte Material Design para visualização dos ícones do Google Fonts -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body class="bg-dark">

<div class="geral">
<div class="container-fluid my-5">
    <div class="row ">      
        <div class="col-6 mx-auto">  
            <form class="text-center" name="formUsuario" method="post" action="valida_visitante.php">
                <div class="card text">
                    <div class="card-header">
                    </div>
                        
                        <div class="card-body">			                        

                            <h5 class="card-title alert alert-primary">
                                <strong>Novo Usuário</strong>                              
                            </h5>
                            
                            <div class="text-left">  
                                <p class="card-text">                            
                    
                                    <br>                                                    
                                    <!-- Nome | Text input -->
                                    &nbsp;&nbsp;
                                    <label for="nome_usuario">
                                    <strong>Nome:</strong>
                                    </label>
                                    <input class="form-control" type="text" id="nome_usuario" name="nome_usuario" class="form-control mb-4" maxlength="50" placeholder="Nome do Usuário" required />

                                    <br>  

                                    <!-- CPF | text input-->
                                    &nbsp;&nbsp;
                                    <label for="cpf">
                                    <strong>CPF:</strong>
                                    </label>
                                    <input class="form-control" type="text" id="CPF" name="CPF" class="form-control mb-4" placeholder="CPF do Usuário" maxlength="14" required />
                                                                        
                                    <br>  

                                    <!-- Email | Email input-->
                                    &nbsp;&nbsp;
                                    <label for="email">
                                    <strong>E-mail:</strong>
                                    </label>
                                    <input class="form-control md-4" type="email" id="email" name="email" class="form-control mb-4" placeholder="Email do Usuário" maxlength="50" required />                                        

                                    <br>  
                                    
                                    <!-- Senha | Password input-->
                                    &nbsp;&nbsp;
                                    <label for="senha">
                                    <strong>Senha:</strong>
                                    </label>
                                    <input class="form-control" type="password" id="senha" name="senha" class="form-control mb-4"  maxlength="100" placeholder="Senha do Usuário" required />
                                    
                                    <br>  

                                    <!-- Confirmação da Senha | Password input-->
                                    &nbsp;&nbsp;
                                    <label for="confirma">
                                    <strong>Confirme sua Senha:</strong>
                                    </label>
                                    <input class="form-control" type="password" id="confirma" name="confirma" class="form-control mb-4" maxlength="100" placeholder="Confirmação da Senha do Usuário" required />
                                    
                                    <br>                               
                                </p>
                            </div>
                            
                        </div>

                    <div class="card-footer text-muted text-center">
                        <div class="row">

                        <div class="col">
                        <button type="button" id="voltar" name="voltar" class="btn btn-sm btn-outline-danger" onClick="history.go(-1)">
                        <i class='material-icons vertical-align-middle'>undo</i>
                            Voltar
                        </button>   
                        </div>

                        <div class="col">                            
                        <button type="submit" id="salvarUsuario" name="salvarUsuario" class="btn btn-sm btn-outline-primary">
                        <i class='material-icons vertical-align-middle'>save</i>
                            Salvar
                        </button>    
                        
                        </div>                            
                    </div>

                </div>
            </form>
        </div>
</div>                


<?php
include_once 'rodape.php';
?>