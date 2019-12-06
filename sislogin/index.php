


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

<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body class="bg-dark ">
<!-- 
<div class="container-fluid my-5">
    <div class="row ">      
    <div class="col">   
        <p></p>
    </div>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row ">      
    <div class="col">   
        <p></p>
    </div>
    </div>
</div>
 -->
<div class="container-fluid my-5">
    <div class="row ">      
        <div class="col-6 mx-auto"> 
            <form class="text-center" name="formLogin" method="post" action="login.php">
                <div class="card text-center">
                    <div class="card-header">

                    </div>

                    <div class="card-body">

                    <h5 class="card-title alert alert-primary">
                    <strong>Sistema de Login</strong>
                    </h5>

                        <p class="card-text">

                        <i class="fa fa-address-card" aria-hidden="true"></i>
                        &nbsp;&nbsp;
                        <label for="email">
                        E-mail:
                        </label>
                        <input class="form-control" type="email" id="email" name="email"
                        title="Informe o E-mail" maxlength="20" required autofocus />

                        <br>                            
                        <br>

                        <i class="fa fa-key"></i>
                        &nbsp;&nbsp;
                        <label for="senha">
                        Senha:
                        </label>
                        <input class="form-control" type="password" id="senha" name="senha"
                        class="form-control mb-4" maxlength="25" required>

                        <br>

                        </p>

                    </div>

                    <div class="card-footer text-muted">                     
                        
                        <?php echo $validacoes->botao('Novo Usuário', 'btn btn-sm btn-outline-primary', 'novo_usuario.php', 'note_add');	?>	


                        <button type="submit" id="login" name="login" class="btn btn-sm btn-outline-success">
                        <i class='material-icons vertical-align-middle'>done</i>
                            Entrar
                        </button>  

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- <div class="container-fluid my-5">
    <div class="row ">      
    <div class="col">   
        <p></p>
    </div>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row ">      
    <div class="col">   
        <p></p>
    </div>
    </div>
</div> -->



<?php
include_once("rodape.php");
?>

