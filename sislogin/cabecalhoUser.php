
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

<nav class="navbar navbar-expand-lg navbar-light navAdmin">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">      
      <li class="nav-item right-align">
        <a class="nav-link" href="logout.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>



