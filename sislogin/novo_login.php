
<?php
include_once("cabecalhoAdmin.php");
?>

<div class="geral">
<div class="container-fluid my-5">
    <div class="row ">      
        <div class="col-6 mx-auto">  
            <form class="text-center" name="formUsuario" method="post" action="valida_usuario.php">
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

                                    <!-- Login | text input-->
                                    &nbsp;&nbsp;
                                    <label for="login">
                                    <strong>Login:</strong>
                                    </label>
                                    <input class="form-control" type="text" id="login" name="login" class="form-control mb-4" placeholder="Login do Usuário" maxlength="20" required />
                                                                        
                                    <br>  

                                    <!-- CPF | text input-->
                                    &nbsp;&nbsp;
                                    <label for="cpf">
                                    <strong>CPF:</strong>
                                    </label>
                                    <input class="form-control" type="text" id="CPF" name="CPF" class="form-control mb-4" placeholder="CPF do Usuário" maxlength="14" required />
                                                                        
                                    <br>  

                                    <!-- CPF | text input-->
                                    &nbsp;&nbsp;
                                    <label for="tipo">
                                    <strong>Tipo:</strong>
                                    </label>
                                    <input class="form-control" type="text" id="tipo" name="tipo" class="form-control mb-4" placeholder="Tipo de Usuário 1 para Admin e 2 para Usuário" maxlength="1" required />
                                                                        
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
                                    
                                    <!-- Situacao| Radio input-->	
                                    &nbsp;&nbsp;
                                    <label for="situacao">
                                    <strong>Situação:</strong>
                                    </label>
                                    <br>
                                    <input type="radio" id="situacao1" name="situacao" value="1" checked>                                        
                                    <label class="form-check-label" for="situacao1">
                                    Disponível
                                    </label>
                                    
                                    <br>

                                    <input type="radio" name="situacao" id="situacao0" value="0">
                                    <label class="form-check-label" for="situacao0">
                                    Indisponível
                                    </label>

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
                        <button type="submit" id="salvar" name="salvar" class="btn btn-sm btn-outline-primary">
                        <i class='material-icons vertical-align-middle'>save</i>
                            Salvar
                        </button>    
                        
                        </div>                            
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>


<?php
include_once("rodape.php");
?>
