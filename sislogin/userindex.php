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

<?php 
/* 
if(isset($_GET['id_usuario'])){

    $id_usuario = $crud->limpaTexto($_GET['id_usuario']);
    $resultado = $crud->getDados("SELECT * FROM usuarios WHERE id_usuario=$id_usuario");

    foreach ($resultado as $linha){        
      $nome_usuario = $linha['nome_usuario'];		
      $email = $linha['email'];
      $login = $linha['login'];
      $situacao = $linha['situacao'];
    }

}
 */
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
                                            value="<?php echo $_SESSION['id_usuario'] ?>" />

                                            <br>  

                                            <!-- Nome | Text input -->
                                            &nbsp;&nbsp;
                                            <label for="nome">
                                            <strong>Nome:</strong>
                                            </label>
                                            <input class="form-control" readonly type="text" id="nome" name="nome" class="form-control mb-4" maxlength="50" placeholder="Nome do Usuário" required 
                                            value="<?php echo $_SESSION['nome_usuario'] ?>" />

                                            <br>  

                                            <!-- Login | text input-->
                                            &nbsp;&nbsp;
                                            <label for="login">
                                            <strong>Login:</strong>
                                            </label>
                                            <input class="form-control" readonly type="text" id="login" name="login" class="form-control mb-4" placeholder="Login do Usuário" maxlength="20" required 
                                            value="<?php echo $_SESSION['login'] ?>" />
                                                                                
                                            <br>  

                                            <!-- Email | Email input-->
                                            &nbsp;&nbsp;
                                            <label for="email">
                                            <strong>E-mail:</strong>
                                            </label>
                                            <input class="form-control md-4" readonly type="email" id="email" name="email" class="form-control mb-4" placeholder="Email do Usuário" maxlength="50" required 
                                            value="<?php echo $_SESSION['email'] ?>" >                                        

                                            <br> 
                                        
                                        </p>
                                    </div>
                                    

                                </div>                  

                            <div class="card-footer text-muted text-center">
                                <div class="row">

                                <?php 
                                    $id_usuario = $_SESSION['id_usuario'];
                                    echo "<a href=\"userpagina2.php?id_usuario=$id_usuario\" class='btn btn-sm btn-outline-warning' title='Editar o registro corrente'><i class='material-icons vertical-align-middle'>edit</i> Editar</a>";
                                ?>
                                
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
