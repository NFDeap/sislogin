
<?php
include_once("cabecalhoAdmin.php");
?>


<?php if(isset($_GET['id_usuario'])){

$id_usuario = $crud->limpaTexto($_GET['id_usuario']);
$resultado = $crud->getDados("SELECT nome_usuario FROM usuarios WHERE id_usuario=$id_usuario");

foreach ($resultado as $linha){        
  $nome_usuario = $linha['nome_usuario'];		
}

}

?>
<div class="container-fluid my-5">
    <div class="row ">      
        <div class="col-6 mx-auto"> 
            <h1 class="text-white"> SisAdmin </h1>
            <?php            
                echo "<h3 class='text-white'> Bem Vindo ". $nome_usuario . "! </h3>";            
            ?>            

        </div>
    </div>
</div>


<?php
include_once("rodape.php");
?>
