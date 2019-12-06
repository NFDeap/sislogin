<?php
include_once("cabecalhoUser.php");
?>

<?php 
/* 
if(isset($_GET['id_usuario'])){

    $id_usuario = $crud->limpaTexto($_GET['id_usuario']);
    $resultado = $crud->getDados("SELECT * FROM usuarios WHERE id_usuario=$id_usuario");

    $_SESSION["id_usuario"]=$id_usuario;

    foreach ($resultado as $linha){        
      $nome_usuario = $linha['nome_usuario'];		
      $email = $linha['email'];
      $login = $linha['login'];
      $cpf = $linha['CPF'];
      $tipo = $linha['tipo'];
      $situacao = $linha['situacao'];
      $tipo = 2;
    }

}

 */
?>
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
							        <strong>Edita Usuário</strong>
						        </h5>

                                <div class="text-left">  
						            <p class="card-text">                            
						
                                        <br>  
                                        
                                        <!-- ID Usuario | Readonly -->
                                        &nbsp;&nbsp;
                                        <label for="nome_usuario">
                                        <strong>ID Usuário:</strong>
                                        </label>
                                        <input class="form-control" type="text" id="id_usuario" name="id_usuario" class="form-control mb-4" readonly
                                        value="<?php echo $_SESSION['id_usuario'] ?>" />

                                        <br>  

                                        <!-- Nome | Text input -->
                                        &nbsp;&nbsp;
                                        <label for="nome_usuario">
                                        <strong>Nome:</strong>
                                        </label>
                                        <input class="form-control" type="text" id="nome_usuario" name="nome_usuario" class="form-control mb-4" maxlength="50" placeholder="Nome do Usuário" required 
                                        value="<?php echo $_SESSION['nome_usuario'] ?>" />

                                        <br>  


                                        <!-- CPF | text input-->
                                        &nbsp;&nbsp;
                                        <label for="cpf">
                                        <strong>CPF:</strong>
                                        </label>
                                        <input class="form-control" type="text" id="CPF" name="CPF" class="form-control mb-4" placeholder="CPF do Usuário" maxlength="14" required 
                                        value="<?php echo $_SESSION['CPF'] ?>" />
                                                                            
                                        <br>                                        

                                        <!-- Email | Email input-->
                                        &nbsp;&nbsp;
                                        <label for="email">
                                        <strong>E-mail:</strong>
                                        </label>
                                        <input class="form-control md-4" type="email" id="email" name="email" class="form-control mb-4" placeholder="Email do Usuário" maxlength="50" required 
                                        value="<?php echo $_SESSION['email'] ?>" >                                        

                                        <br>  
                                        
                                        <!-- Senha | Password input-->
                                        &nbsp;&nbsp;
                                        <label for="senha">
                                        <strong>Senha:</strong>
                                        </label>
                                        <input class="form-control" type="password" id="senha" name="senha" class="form-control mb-4" placeholder="Senha do Usuário" maxlength="100" required />
                                        
                                        <br>  

                                        <!-- Confirmação da Senha | Password input-->
                                        &nbsp;&nbsp;
                                        <label for="confirma">
                                        <strong>Confirme sua Senha:</strong>
                                        </label>
                                        <input class="form-control" type="password" id="confirma" name="confirma" class="form-control mb-4" placeholder="Confirmação da Senha do Usuário" maxlength="100" required />
                                        
                                        <br> 
                                        
                                    
                                    </p>
                                </div>
                                

                            </div>


                        <div class="card-footer text-muted text-center">
                            <div class="row">

                            <div class="col">
                            <!-- <a href="usuarios.php"> -->
                            <button type="button" id="voltar" name="voltar" class="btn btn-sm btn-outline-danger" onClick="history.go(-1)">
                            <i class='material-icons vertical-align-middle'>undo</i>
                                Voltar
                            </button>    
                            <!-- </a> -->
                            </div>

                            <div class="col">                            
                            <button type="submit" id="alterarUsuario" name="alterarUsuario" class="btn btn-sm btn-outline-primary">
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