<?php
include_once("cabecalhoUser.php");
?>

<?php
if(empty($_SESSION)) {// Se a sessao não estiver iniciada, iniciaremos! }
   session_start();
}
if(!isset($_SESSION['id_usuario'])) { //Se ainda não estiver logado
   header("Location: index.php");// Enviamos para a página inicial
   exit;
}
?>

<?php if(isset($_GET['id_usuario'])){

    $id_usuario = $crud->limpaTexto($_GET['id_usuario']);
    $resultado = $crud->getDados("SELECT * FROM usuarios WHERE id_usuario=$id_usuario");

    foreach ($resultado as $linha){        
      $nome_usuario = $linha['nome_usuario'];		
      $email = $linha['email'];
      $login = $linha['login'];
      $situacao = $linha['situacao'];
    }

}

?>

<div class="container-fluid my-5">
    <div class="row ">      
        <div class="col-6 mx-auto">                     

        <form class="text-center" name="formUsuario" method="post" action="valida_usuario.php">
					<div class="card text">
						<div class="card-header">
						</div>
                           
						    <div class="card-body">			                        

                                <h5 class="card-title alert alert-primary">
							        <strong>Perfíl</strong>
						        </h5>

                                <div class="text-left">  
						            <p class="card-text">                            
						
                                        <br>  
                                        
                                        <!-- ID Usuario | Readonly -->
                                        &nbsp;&nbsp;
                                        <label for="nome">
                                        <strong>ID Usuário:</strong>
                                        </label>
                                        <input class="form-control" type="text" id="id_usuario" name="id_usuario" class="form-control mb-4" readonly
                                        value="<?php echo $id_usuario ?>" />

                                        <br>  

                                        <!-- Nome | Text input -->
                                        &nbsp;&nbsp;
                                        <label for="nome">
                                        <strong>Nome:</strong>
                                        </label>
                                        <input class="form-control" readonly type="text" id="nome" name="nome" class="form-control mb-4" maxlength="50" placeholder="Nome do Usuário" required 
                                        value="<?php echo $nome_usuario ?>" />

                                        <br>  

                                        <!-- Login | text input-->
                                        &nbsp;&nbsp;
                                        <label for="login">
                                        <strong>Login:</strong>
                                        </label>
                                        <input class="form-control" readonly type="text" id="login" name="login" class="form-control mb-4" placeholder="Login do Usuário" maxlength="20" required 
                                        value="<?php echo $login ?>" />
                                                                            
                                        <br>  

                                        <!-- Email | Email input-->
                                        &nbsp;&nbsp;
                                        <label for="email">
                                        <strong>E-mail:</strong>
                                        </label>
                                        <input class="form-control md-4" readonly type="email" id="email" name="email" class="form-control mb-4" placeholder="Email do Usuário" maxlength="50" required 
                                        value="<?php echo $email ?>" >                                        

                                        <br> 
                                    
                                    </p>
                                </div>
                                

                            </div>                  

                        <div class="card-footer text-muted text-center">
                            <div class="row">

                            <?php 
                                echo "<a href=\"userpagina2.php?id_usuario=$linha[id_usuario]\" class='btn btn-sm btn-outline-warning' title='Editar o registro corrente'><i class='material-icons vertical-align-middle'>edit</i> Editar</a>";
                            ?>
                            
                            </div>                            
                        </div>

                    </div>
                </form>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>


</body>
</html>