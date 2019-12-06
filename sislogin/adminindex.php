
<?php
include_once("cabecalhoAdmin.php");
?>

<div class="geral">
<div class="container-fluid my-5">
    <div class="row ">      
        <div class="col-6 mx-auto"> 
            <h1 class="text-white"> SisAdmin </h1>
            <?php            
                echo "<h3 class='text-white'> Bem Vindo ". $_SESSION['nome_usuario'] . "! </h3>";            
            ?>            

        </div>
    </div>
</div>
</div>


<?php
include_once("rodape.php");
?>
